<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Cache;

class homeController extends Controller
{
    public function index()
    {
        $city = city();
        return view('home')->with(compact('city'));
    }


}
