<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view ('register.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
                'name' => 'required',
                'telp' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'password' => 'required'
            ]);
            
        dd($request);

        //User::create($validatedData);
    }
}
