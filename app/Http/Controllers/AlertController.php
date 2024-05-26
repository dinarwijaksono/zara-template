<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function index()
    {
        session()->put('menuActive', 'alert');

        return view('Alert.index');
    }
}
