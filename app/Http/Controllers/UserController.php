<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('profile.index');
    }
    public function orders(){
        return view('profile.orders');
    }
    public function wish(){
        return view('profile.wish');
    }
}
