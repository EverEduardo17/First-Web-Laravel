<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Se le coloca el nombre "__invoke" cuando el controlador solo cuenta con un método
    public function __invoke()
    {
        // Mandamos a llamar a la vista "home.blade.php"
        return view('MyViews.home');
    }
}
