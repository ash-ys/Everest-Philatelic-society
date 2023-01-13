<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sitecontroller extends Controller
{
    public function welcome(){
        return view ('welcome');
    }
}
