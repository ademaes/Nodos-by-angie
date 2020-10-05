<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function prueba(){
        return view('HomeAde');
    }

    public function tamanos(){
        return view('tamano');
    }

    public function chiquita(){
        return view('pequeno');
    }

    public function mediana(){
        return view('mediana');
    }

    public function grande(){
        return view('grande');
    }
}
