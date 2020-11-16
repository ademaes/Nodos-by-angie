<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Manilla;
use Illuminate\Support\Facades\DB;

class ManillaController extends Controller
{
   

    
    public function save3Colores(Request $request)
    {
        $request->validate([
            "color1" => "string",
            "color2" => "string",
            "color3" => "string",
            "nota" => "string",
        ]);
        $id = Auth::id();

        $manilla = [];
        $manilla["dueno"] = $id;
        $manilla["tamano"] = session('tamano');
        $manilla["estilo"] = session('estilo');
        $colores = $request["color1"].", ".$request["color2"].", ".$request["color3"];
        $manilla["colores"] = $colores;
        $mani = Manilla::create($manilla)->id;
        return view('displayManilla');
    }

    
}
