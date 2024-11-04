<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentionsLegales extends Controller
{
    public function index() {
        return view('MentionsLegales');
    }
}
