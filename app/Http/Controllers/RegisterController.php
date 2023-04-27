<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('auth.register');
    }
    

    public function store(Request $request)
    {
       // dd($request);
       // dd($request->get('username'));

     // validación
     $this->validate($request, [
        'name' => 'required|min:3|max:17',
        'username' => 'required|unique:users|min:3|max:17',
        'email' => 'required|unique:users|email|max:20',
        'password'=> 'required|min:6|max:20',
     ]);
    }
}