<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SideController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function dostavka()
    {
        return view('pages.info.dostavka');
    }

    public function oplata()
    {
        return view('pages.info.oplata');
    }

    public function politika()
    {
        return view('pages.info.politika');
    }

    public function rent()
    {
        return view('pages.rent');
    }

    public function company()
    {
        return view('pages.company');
    }
}
