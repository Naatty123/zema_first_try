<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $iconbt = ["Playlist","Album","Top","Artists","This Wheel"];
        return view('index', ['iconbt' => $iconbt]);
    }
}
