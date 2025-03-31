<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class folderview extends Controller
{
    public function index()
    {
        return view('folders');
    }
}
