<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\User;
use PDF;

class ManageUsersController extends Controller
{
    public function __construct() {
        $this->middleware(function ($request, $next) {
            if (Gate::allows('manage-articles')) return $next ($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }

    public function usersView() {
        $user = User::paginate(5);
        return view('childKuis.manageUsers', ['user' => $user]);
    }

    // user registration
    public function register() {
        return view('childKuis.addUser');
    }

    public function create(Request $request) {
        // validasi
        $validatedData = $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'profile_image' => 'mimes:jpeg,bmp,png',
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'name.min' => 'Minimal 2 karakter untuk nama',
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Kata sandi dibutuhkan',
            'password.min' => 'Kata sandi minimal 8 karakter',
            'password_confirmation.min' => 'Isi konfirmasi sandi minimal 8 karakter',
            'password_confirmation.same' => 'Kata sandi anda berbeda dari sebelumnya',
        ]);

        if ($request->file('profile_image')) {
            $image_name = $request->file('profile_image')->store('images/profile', 'public');
        }

        if($request->hasFile('profile_image')) {
            if ($request->file('profile_image')) {
                $image_name = $request->file('profile_image')->store('images/profile', 'public');
            }
        } else {
            $image_name = 'empty';
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
            'roles' => 'User',
            'profile_image' => $image_name
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

        // check if roles is exists
        if($request->has('roles')) {
            $user->roles = $request->roles;
        }

        // remove image
        // if image request is exist, then remove existing image on storage
        if($request->hasFile('profile_image')) {
            if ($user->profile_image && file_exists(storage_path('app/public/'.$user->profile_image)))
            {
                \Storage::delete('public/'.$user->profile_image);
            }
            // change with new image
            $image_name = $request->file('profile_image')->store('images/profile', 'public');
            $user->profile_image = $image_name;
        }

        $user->save();

        return redirect('/manageUsers');
    }

    public function drop($id) {
        $user = User::find($id);
        $user->delete();

        return redirect('/manageUsers');
    }

    // search
    public function searchUser(Request $request) {
        $user = User::where('name', 'like', '%'.$request->keyword.'%')
            ->orWhere('email', 'like', '%'.$request->keyword.'%')
            ->orWhere('roles', 'like', '%'.$request->keyword.'%')->paginate(5);

        return view('childKuis.manageUsers', ['user'=>$user]);
    }

    // print user doc
    public function cetak_pdf() {
        $user = User::all();
        $pdf = PDF::loadview('childKuis.users_pdf', ['user'=>$user]);
        return $pdf->stream();
        // return view('childKuis.users_pdf', ['user'=>$user]);
    }
}
