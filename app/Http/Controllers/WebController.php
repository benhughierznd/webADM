<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index($testing) {
        return $testing;
    }

    public function home() {
        return view('home');
    }

    public function proses(Request $request) {
        $username = $request->input('username');
     	$email = $request->input('email');
        return "Username : ".$username.", Email : ".$email;
    }

}
