<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Manilla;
use Illuminate\Support\Facades\DB;

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
        return view('HomeAde');
    }

    public function prueba(){
        return view('HomeAde');
    }

    public function tamanos(){
        return view('tamano');
    }

    public function chiquita(){
        session(['tamano'=>'chiquita']);
        return view('pequeno');
    }

    public function mediana(){
        session(['tamano'=>'mediana']);
        return view('mediana');
    }

    public function grande(){
        session(['tamano'=>'grande']);
        return view('grande');
    }
    
}
