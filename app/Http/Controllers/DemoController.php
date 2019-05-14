<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function elements(){
        return view('admin.demo.elements');
    }
    public function charts(){
        return view('admin.demo.charts');
    }
    public function panels(){
        return view('admin.demo.panels');
    }
    public function tables(){
        return view('admin.demo.tables');
    }
    public function notifications(){
        return view('admin.demo.notifications');
    }
    public function icons(){
        return view('admin.demo.icons');
    }
    public function dashboard(){
        return view('admin.demo.template');
    }
    public function typography(){
        return view('admin.demo.typography');
    }
    public function pageLogin(){
        return view('admin.demo.page-login');
    }
    public function pageProfile(){
        return view('admin.demo.page-profile');
    }
    public function pageLockscreen(){
        return view('admin.demo.page-lockscreen');
    }
}
