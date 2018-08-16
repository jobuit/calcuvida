<?php

namespace App\Http\Controllers\diabetes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformacionDiabetesController extends Controller
{
    public function index()	{
        return view('informacion_diabetes/content');
    }

    public function conteoCarbohidratos()	{
        return view('informacion_diabetes/conteo_carbohidratos');
    }
}
