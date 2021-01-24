<?php

namespace App\Http\Controllers;

use App\Models\Component;
use App\Models\Config;
use App\Models\COOLING;
use App\Models\CPU;
use App\Models\DRIVE;
use App\Models\GPU;
use App\Models\MBD;
use App\Models\PCCASE;
use App\Models\PSU;
use App\Models\RAM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ConfigController extends Controller
{
    public function index()
    {
        return view('config.index', ['configs' => Config::all()]);
    }

    public function create()
    {
        $config = Config::getFromSessionOrCreate();

        return view('config.create', [
            "config" => $config,
            "compatibilityErrors" => $config->compatibilityErrors()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required'
        ]);

        $config = Config::getFromSessionOrCreate();

        $config->title = $request->input("title");
        $config->desc = $request->input("desc");

        $config->user()->associate(Auth::user());

        if(!$config->isComplete())
            throw ValidationException::withMessages(['Config' => "Config is incomplete"]);

        if(!$config->isCompatible())
            throw ValidationException::withMessages(['Config' => "Config is incompatible"]);

        $config->calcPrice();

        $config->save();

        $request->session()->forget("config");

        return redirect(route("config.show", ['config' => $config]));
    }

    public function show(Config $config)
    {
        $user = Auth::user();
        return view("config.show", ['config' => $config, 'user' => $user, 'owner' => true ]);
    }

    public function edit(Config $config)
    {
        if (!session()->has("config")) {
            $config->saveInSession();
        }
        else {
            $config = Config::getFromSessionOrCreate();
        }
        $id = Auth::id();
        if ($config->user_id == $id) {
            session(['edit' => true]);
            return view("config.edit", [
                'config' => $config,
                'compatibilityErrors' => $config->compatibilityErrors()
            ]);
        }
        else {
            return abort('403');
        }

    }

    public function update(int $id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required'
        ]);

        $config = Config::getFromSessionOrCreate();

        if ($config->id != $id) {
            return abort('403');
        }
        $config->title = $request->input("title");
        $config->desc = $request->input("desc");

        if(!$config->isComplete())
            throw ValidationException::withMessages(['Config' => "Config is incomplete"]);

        if(!$config->isCompatible())
            throw ValidationException::withMessages(['Config' => "Config is incompatible"]);

        $config->calcPrice();

        $config->save();

        $request->session()->forget("config");


        return redirect("config/".$config->id);
    }

    public function destroy(Config $config)
    {
        $id = Auth::id();
        if ($config->user_id == $id) {
            $config->delete();
            return redirect('/user/'.$id);
        }
        else {
            return abort('403');
        }
    }

    public function verify(Config $config)
    {
        $user = Auth::user();
        if ($user->user_type == 'admin') {
            if ($config->is_verified == true) {
                $config->is_verified = false;
                $config->save();
            }
            else {
                $config->is_verified = true;
                $config->save();
            }


            return redirect()->route('config.show', $config);
        }
        else {
            return abort('403');
        }

    }

    public function publish(Config $config)
    {
        $user = Auth::user();
        if ($config->user_id == $user->id) {
            $config->public = true;
            $config->save();
            return redirect()->route('user.show', $user);
        } else {
            return abort('403');
        }
    }

    public function shareUrl(Config $config, Request $request)
    {
        if ($config->share_url == "")
        {
            $value = md5(mt_rand());
            $config->share_url = $value;
            $config->save();
        }
        return view('config.share_url')->withConfig($config);
    }

    public function sharedConfig(Config $config, string $md5)
    {
        $owner = false;
        if ($md5 != $config->share_url)
        {
            return abort('403');
        }
        $user = Auth::user();
        if(Auth::id() == $config->user_id)
        {
            $owner = true;
        }
        return view("config.show", ['config' => $config, 'user' => $user, 'owner' => $owner]);

    }

    public function generate($price)
    {
         /** For now define percentages we are looking for. [Needs to be placed somewhere adequate] */

        $percentages = array('cpu' => 0.17, 'gpu' => 0.445, 'ram' => 0.6, 'drive' => 0.065, 'pccase' => 0.04, 'psu' => 0.06,'cooling' => 0.02,'mb' => 0.13);
        $priceOf = array();
        foreach($percentages as $key => $value)
            $priceOf[$key] = $value * $price;

        /** Get all valid motheboards on which we will build the config */
        $mb = MBD::get()->whereBetween('price', [0.8*$priceOf['mb'], 1.2*$priceOf['mb']]);
        /** TODO: Determine how many configs will be provided
         *  TODO: Will need another query on different compatibilities to get sets of mbs
         *  TODO: //$configs = array();     // This stores different configs
         */
        $configs = new Config();
        $additionalComponents = array();
        $chosenMB = Component::getClosest($priceOf['mb'], $mb);
        $configs->mbd()->associate($chosenMB);

        /** Need to unset the price of mb to properly iterate over the array */
        unset($priceOf['mb']);

        foreach($priceOf as $key => $value)
        {
            /** Generate a model for the component and look for the most fitting one */
            $model = 'App\Models\\'. strtoupper($key);
            $dummy = $model::compatible($configs->compatibleSpec($key))->whereBetween('price', [0.8*$priceOf[$key], 1.2*$priceOf[$key]])->get();

            if(count($dummy) == 0)
            {
                /** Either find more components or display en error, for now: */
                continue;
            }
            else
            {

                /** Choose a most fitting component based on price and remove it from the list of valid candidates */
                $chosenDummy = Component::getClosest($priceOf[$key], $dummy);
                $forgetKey = $dummy->search($chosenDummy);
                $dummy->forget($forgetKey);

                /** Dummy has now other candidate components */
                $additionalComponents[$key] = $dummy;
                /** Associate the chosen compoment with the config */
                $configs->$key()->associate($chosenDummy);
            }
        }
        //var_dump($additionalComponents);
        //die($configs);

        return view("welcome", ['pcconfig' => $configs]);
    }



}
