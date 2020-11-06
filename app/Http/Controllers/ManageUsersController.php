<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\User;

class ManageUsersController extends Controller
{
    public function __construct() {
        $this->middleware(function ($request, $next) {
            if (Gate::allows('manage-articles')) return $next ($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }

    public function usersView() {
        $user = User::all();
        return view('childKuis.manageUsers', ['user' => $user]);
    }

    // user registration
    public function register() {
        return view('childKuis.addUser');
    }

    public function create(Request $request) {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
            'roles' => 'User'
        ]);
        
        return redirect('/manageUsers');
    }

    public function edit($id) {
        $user = User::find($id);
        return view('childKuis.editUser', ['user' => $user]);
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->roles = $request->roles;
        $user->save();

        return redirect('/manageUsers');
    }

    public function drop($id) {
        $user = User::find($id);
        $user->delete();

        return redirect('/manageUsers');
    }
}
