<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Config;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{


    public function show(User $user)
    {
        $id = Auth::id();
        $owner = false;
        if ($user->id == $id) {
            $configs = Config::get()->where('user_id', $user->id);
            $owner = true;
        }
        else {
            $configs = Config::get()->where('user_id', $user->id)->where('public', true);
        }
        return view('user.show', [
            'user' => $user,
            'configs' => $configs,
            'owner' => $owner]);
    }

    public function edit(User $user)
    {
        $id = Auth::id();
        if ($user->id == $id) {
            return view("user.edit", ['user' => $user]);
        }
        else {
            return abort('403');
        }
    }

    public function update(string $type)
    {
        $user = Auth::user();

        switch ($type) {
            case 'password':
                $user->update(request()->validate([
                    'current_password' => 'required|password',
                    'new_password' => 'required|email',
                    'confirm_password' => 'required|same:new_password|email'
                ]));
                break;
            case 'email':
                $user->update(request()->validate([
                    'current_password' => 'required|password',
                    'new_email' => 'required|email',
                    'confirm_email' => 'required|same:new_email|email'
                ]));
                break;
        }

        //TODO: set some more legitimate validation rules

        return redirect("user/".$user->id);
    }

    public function editPassword()
    {
        return view('user.editPassword');
    }

    public function editEmail()
    {
        return view('user.editEmail');
    }

    public function destroy(User $user)
    {
        //
    }
}
