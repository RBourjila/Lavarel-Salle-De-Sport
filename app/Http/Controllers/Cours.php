<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cours extends Controller
{
    public function index() {
        return view('cours');
    }
}
