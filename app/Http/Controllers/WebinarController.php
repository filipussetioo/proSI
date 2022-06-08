<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebinarController extends Controller
{
    public function index(){
        return view('webinar.index',[
            'title' => 'Webinar'
        ]);
    }
    public function register(){
        return view('webinar.register',[
            'title' => 'Webinar'
        ]);
    }
}

