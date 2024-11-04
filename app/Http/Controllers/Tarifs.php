<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tarifs extends Controller
{
    public function index() {
        return view('tarifs');
    }
}
