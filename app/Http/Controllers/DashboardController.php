<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Home/index');
    }


    public function heading()
    {
        return view('Home/heading');
    }

    public function colors()
    {
        return view('/Home/colors');
    }
}
