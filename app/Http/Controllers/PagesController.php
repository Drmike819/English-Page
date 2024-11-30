<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;

class PagesController extends Controller
{
    public function home()
    {
        // Obtener los datos de los temas
        $topics = Topic::all(); // O el método que estés utilizando para obtener los datos
    
        // Pasar los datos a la vista
        return view('pages.home', compact('topics'));
    }
}
