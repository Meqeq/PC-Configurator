<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ConfigController extends Controller
{
    private $COMPONENT_NAMES = ['cpu', 'gpu', 'mb', 'case', 'drive', 'psu', 'ram', 'cooling'];

    public function index()
    {
        return view('config.index', ['configs' => Config::all()]);
    }

    public function create()
    {
        return view('config.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required'
        ]);

        $sessionValidation = $this->validateConfigSession($request->session());
        if($sessionValidation != null) {
            throw ValidationException::withMessages([$sessionValidation => 'This value must not be empty']);
        }

        $pcconfig = new Config();
        $pcconfig->title = $request->input("title");
        $pcconfig->desc = $request->input("desc");

        $pcconfig->cpu_id = $request->session()->get('cpu')->id; //(session('cpu'))->id;
        $pcconfig->gpu_id = $request->session()->get('gpu')->id;
        $pcconfig->mb_id = $request->session()->get('mb')->id;
        $pcconfig->case_id = $request->session()->get('case')->id;
        $pcconfig->drive_id = $request->session()->get('drive')->id;
        $pcconfig->psu_id = $request->session()->get('psu')->id;
        $pcconfig->ram_id = $request->session()->get('ram')->id;
        $pcconfig->cooling_id = $request->session()->get('cooling')->id;

        $pcconfig->is_verified = false;
        $pcconfig->price = $this->calcConfigPrice($request->session());

        if (Auth::check())
        {
            $pcconfig->user_id = Auth::id();
        } else {
            throw ValidationException::withMessages(["user" => 'You are not logged in! Nice try hacking my app :D']);
        }

        $pcconfig->save();

        $request->session()->forget($this->COMPONENT_NAMES); // clean session

        return redirect("config/".$pcconfig->id);
    }

    public function show(Config $config)
    {
        $user = Auth::user();
        return view("config.show", ['config' => $config, 'user' => $user]);
    }

    public function edit(Config $config)
    {
        $id = Auth::id();
        if ($config->user_id == $id) {
            return view("user.edit", ['config' => $config]);
        }
        else {
            return abort('403');
        }

    }

    public function update(Config $config)
    {
        //TODO: lepsza walidacja
        $config->update(request()->validate([
            'cpu_id' => 'required',
            'gpu_id' => 'required',
            'mb_id' => 'required',
            'ram_id' => 'required'
        ]));

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


    /* Calculates config price */
    private function calcConfigPrice(\Illuminate\Session\Store $session) {
        $price = 0;
        foreach ($this->COMPONENT_NAMES as $objName) {
            $price += $session->get($objName)->price;
        }
        return $price;
    }

    /* Validates if session has all required components  */
    private function validateConfigSession(\Illuminate\Session\Store $session) {
        foreach ($this->COMPONENT_NAMES as $objName) {
            if(! $session->has($objName) )
            {
                return $objName;
            }
        }
        return null;

    }
}
