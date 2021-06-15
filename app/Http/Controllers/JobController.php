<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function test() {
        return view('test');
    }
    
    public function about() {
        return view('about');
    }
}
