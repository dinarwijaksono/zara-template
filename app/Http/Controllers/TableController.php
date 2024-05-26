<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        session()->put('menuActive', 'table');

        return view('Table.index');
    }
}
