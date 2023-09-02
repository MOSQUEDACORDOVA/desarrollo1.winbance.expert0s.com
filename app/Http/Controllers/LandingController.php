<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller{
    public function index(){
        return view('v1\pages\landing\home');
    }
}