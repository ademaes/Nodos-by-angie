<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Manilla;
use App\Entrega;
use Illuminate\Support\Facades\DB;

class ManillaController extends Controller
{
   

    
    public function save3Colores(Request $request)
    {
        $request->validate([
            "color1" => "string | required",
            "color2" => "string | required",
            "color3" => "string | required",
            "nota" => "string",
        ]);
        $id = Auth::id();

        $manilla = [];
        $manilla["dueno"] = $id;
        $manilla["tamano"] = session('tamano');
        $manilla["estilo"] = session('estilo');
        $colores = $request["color1"].", ".$request["color2"].", ".$request["color3"];
        $manilla["colores"] = $colores;
        $manilla["nota"] = $request["nota"];
        $mani = Manilla::create($manilla)->id;
        $maniId = [];
        $maniId["idManilla"] = $mani;
        $fechas = Entrega::All();
        $data = [];

        foreach($fechas as $fecha){
            if(is_null($fecha->idManilla)){
                Entrega::updateIdManilla($fecha->id,$maniId);
                $data["fecha"] = $fecha;
                break;
            }
        }

        return view('displayManilla')->with("data",$data);
    }

    public function save2Colores(Request $request)
    {
        $request->validate([
            "color1" => "string | required",
            "color2" => "string | required",
            "nota" => "string",
        ]);
        $id = Auth::id();

        $manilla = [];
        $manilla["dueno"] = $id;
        $manilla["tamano"] = session('tamano');
        $manilla["estilo"] = session('estilo');
        $colores = $request["color1"].", ".$request["color2"];
        $manilla["colores"] = $colores;
        $manilla["nota"] = $request["nota"];
        $mani = Manilla::create($manilla)->id;

        $maniId = [];
        $maniId["idManilla"] = $mani;
        $fechas = Entrega::All();
        $data = [];

        foreach($fechas as $fecha){
            if(is_null($fecha->idManilla)){
                Entrega::updateIdManilla($fecha->id,$maniId);
                $data["fecha"] = $fecha;
                break;
            }
        }

        return view('displayManilla')->with("data",$data);
    }

    public function save4Colores(Request $request)
    {
        $request->validate([
            "color1" => "string | required",
            "color2" => "string | required",
            "color3" => "string | required",
            "color4" => "string | required",
            "nota" => "string",
        ]);
        $id = Auth::id();

        $manilla = [];
        $manilla["dueno"] = $id;
        $manilla["tamano"] = session('tamano');
        $manilla["estilo"] = session('estilo');
        $colores = $request["color1"].", ".$request["color2"].", ".$request["color3"].", ".$request["color4"];
        $manilla["colores"] = $colores;
        $manilla["nota"] = $request["nota"];
        $mani = Manilla::create($manilla)->id;

        $maniId = [];
        $maniId["idManilla"] = $mani;
        $fechas = Entrega::All();
        $data = [];

        foreach($fechas as $fecha){
            if(is_null($fecha->idManilla)){
                Entrega::updateIdManilla($fecha->id,$maniId);
                $data["fecha"] = $fecha;
                break;
            }
        }

        return view('displayManilla')->with("data",$data);
    }
    public function save5Colores(Request $request)
    {
        $request->validate([
            "color1" => "string | required",
            "color2" => "string | required",
            "color3" => "string | required",
            "color4" => "string | required",
            "color5" => "string | required",
            "nota" => "string",
        ]);
        $id = Auth::id();

        $manilla = [];
        $manilla["dueno"] = $id;
        $manilla["tamano"] = session('tamano');
        $manilla["estilo"] = session('estilo');
        $colores = $request["color1"].", ".$request["color2"].", ".$request["color3"].", ".$request["color4"].", ".$request["color5"];
        $manilla["colores"] = $colores;
        $manilla["nota"] = $request["nota"];
        $mani = Manilla::create($manilla)->id;

        $maniId = [];
        $maniId["idManilla"] = $mani;
        $fechas = Entrega::All();
        $data = [];

        foreach($fechas as $fecha){
            if(is_null($fecha->idManilla)){
                Entrega::updateIdManilla($fecha->id,$maniId);
                $data["fecha"] = $fecha;
                break;
            }
        }

        return view('displayManilla')->with("data",$data);
    }

    public function save7Colores(Request $request)
    {
        $request->validate([
            "color1" => "string | required",
            "color2" => "string | required",
            "color3" => "string | required",
            "color4" => "string | required",
            "color5" => "string | required",
            "color6" => "string | required",
            "color7" => "string | required",
            "nota" => "string",
        ]);
        $id = Auth::id();

        $manilla = [];
        $manilla["dueno"] = $id;
        $manilla["tamano"] = session('tamano');
        $manilla["estilo"] = session('estilo');
        $colores = $request["color1"].", ".$request["color2"].", ".$request["color3"].", ".$request["color4"].", ".$request["color5"].", ".$request["color6"].", ".$request["color7"];
        $manilla["colores"] = $colores;
        $manilla["nota"] = $request["nota"];
        $mani = Manilla::create($manilla)->id;

        $maniId = [];
        $maniId["idManilla"] = $mani;
        $fechas = Entrega::All();
        $data = [];

        foreach($fechas as $fecha){
            if(is_null($fecha->idManilla)){
                Entrega::updateIdManilla($fecha->id,$maniId);
                $data["fecha"] = $fecha;
                break;
            }
        }

        return view('displayManilla')->with("data",$data);
    }

    
}
