<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Registration'
        ]);
    }
    public function store(Request $request)
    {
        $reqvalidate = $request->validate([
            'name' => 'required|min:6|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);
        $reqvalidate['password'] = bcrypt($reqvalidate['password']);
        User::create($reqvalidate);
        // $request->session()->flash('sucess', 'Registration sucessfuly!');
        return redirect('/login')->with('sucess', 'Registration sucessfuly!');
    }
}
