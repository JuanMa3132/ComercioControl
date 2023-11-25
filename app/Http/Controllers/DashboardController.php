<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Tu lógica para la página del dashboard aquí
        return view('Pages.index');  // Ajusta la vista según tus necesidades
    }

    
}
