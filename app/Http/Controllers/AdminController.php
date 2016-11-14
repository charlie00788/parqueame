<?php

namespace App\Http\Controllers;

use App\Entities\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Styde\Html\Facades\Alert;

class AdminController extends Controller
{
    public function getUsers()
    {
        $usuario = auth()->user();
        $users = User::all();

        return view('admin.usuarios', compact('usuario', 'users'));
    }

    public function getDeleteUser($user_id)
    {
        $usuario = User::find($user_id);
        $usuario->delete();

        Alert::message('Usuario eliminado exitósamente', 'danger');

        return redirect(route('admin.getUsers'));
    }

    public function getAddUser()
    {
        $usuario = auth()->user();

        return view('admin.newUser', compact('usuario'));
    }

    public function postAddUser(Request $request)
    {
        $rules = [
            'nickname'  => 'required|between:5,15|unique:users,nickname',
            'name'      => 'required',
            'email'     => 'required|unique:users,email',
        ];

        $this->validate($request,$rules);

        $usuario = new User;
        $usuario->nickname = $request->nickname;
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = bcrypt('parqueo');
        $usuario->role = $request->role;
        $usuario->save();

        Alert::message('Usuario registrado exitósamente.', 'success');

        return redirect(route('admin.getUsers'));
    }
}
