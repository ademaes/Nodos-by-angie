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
        $id = Auth::id();
        $tamano = "chiquita";
        $manilla = [];
        $manilla["dueno"] = $id;
        $manilla["tamano"] = $tamano;
        $mani = Manilla::create($manilla)->id;
        return view('pequeno',compact('mani'));
    }

    public function mediana(){
        return view('mediana');
    }

    public function grande(){
        return view('grande');
    }
    public function tresColores(){
        return view('tresColores');
    }
}
