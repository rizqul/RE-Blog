<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration.index', [
            'title' => 'Registration',
            'active' => 'login'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',                                       /* 1st method using "|" symbol */
            'username' => ['required', 'unique:users', 'max:255', 'min:3'],     /* 2nd method using Array "[]"*/
            'email' => 'required|email:dns|max:255|unique:users',
            'password' => ['required', 'min:5', 'max:255']
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']); /* 1st mehtod using bcrypt() */

        // $validatedData['password'] = Hash::make($validatedData['password']); /* 2nd mehtod using Hashing __it need to import Hash class__ */

        User::create($validatedData);

        session()->flash('registered', 'Registration was successful! Pleaae login'); /* Alternate method found on https://github.com/bmewburn/vscode-intelephense/issues/2216 cause the origin one is error */
        return redirect('/login');
    }
}
