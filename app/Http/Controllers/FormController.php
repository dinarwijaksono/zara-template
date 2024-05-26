<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        session()->put('menuActive', 'form');

        return view('Form.index');
    }
}
