<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Manilla;
use Illuminate\Support\Facades\DB;

class DisenoController extends Controller
{   
    public function chiquitaEstilo1(){
        session(['estilo'=>'1']);
        return view('cuatroColores');
    }

    public function chiquitaEstilo2(){
        session(['estilo'=>'2']);
        return view('tresColores');
    }

    public function chiquitaEstilo3(){
        session(['estilo'=>'3']);
        return view('tresColores');
    }

    public function medianaEstilo1(){
        session(['estilo'=>'1']);
        return view('sieteColores');
    }

    public function medianaEstilo2(){
        session(['estilo'=>'2']);
        return view('sieteColores');
    }

    public function medianaEstilo3(){
        session(['estilo'=>'3']);
        return view('cincoColores');
    }

    public function grandeEstilo1(){
        session(['estilo'=>'1']);
        return view('cincoColores');
    }

    public function grandeEstilo2(){
        session(['estilo'=>'2']);
        return view('sieteColores');
    }

    public function grandeEstilo3(){
        session(['estilo'=>'3']);
        return view('dosColores');
    }


}


    