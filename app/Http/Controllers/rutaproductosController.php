<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rutaproductosController extends Controller
{
    public function index()
    {
        return view('productos.index');
    }
}
