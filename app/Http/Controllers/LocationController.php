<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        $userIP = $request->ip();
        // or $userIP = $_SERVER['REMOTE_ADDR'];

        // $userIP = '';
        $location = Location::get($userIP);
        return view('welcome', compact('location'));
    }
}
