<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Manilla;
use Illuminate\Support\Facades\DB;

class DisenoController extends Controller
{   
    public function chiquitaEstilo2(){
        session(['estilo'=>'2']);
        return view('tresColores');
    }
}


    