<?php

namespace App\Http\Controllers\welcome;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControllerWelcome extends Controller
{
    public function index(){
        return view('welcome/content');
    }
}
