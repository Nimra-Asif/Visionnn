<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view("Web/index");
    }

    public function regChoice(){
        return view("Web/registrationChoice");
    }
}