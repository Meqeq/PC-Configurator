<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Config;


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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
