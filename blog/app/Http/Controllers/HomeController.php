<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Entrega;
use App\Manilla;
use App\User;
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

    public function admin(){
        $data = [];
        $entregas = Entrega::All();
        $pedidos  = [];
        foreach($entregas as $entrega){
            if(!is_null($entrega->idManilla)){
                array_push($pedidos,$entrega);
            }
        }
        $data["pedidos"] = $pedidos;
        return view('admin')->with("data", $data);
    }

    public function verManilla(Request $request){
        $request->validate([
            "idManilla" => "required"
        ]);
        $data = [];
        $data["tamano"] = DB::table('manillas')->where('id',$request["idManilla"])->value('tamano');
        $data["estilo"] = DB::table('manillas')->where('id',$request["idManilla"])->value('estilo');
        $data["colores"] = DB::table('manillas')->where('id',$request["idManilla"])->value('colores');
        $data["idCliente"] = DB::table('manillas')->where('id',$request["idManilla"])->value('dueno');
        return view('verManilla')->with("data", $data);
    }

    public function verCliente(Request $request){
        $request->validate([
            "idCliente" => "required"
        ]);
        $data = [];
        $data["nombre"] = DB::table('users')->where('id',$request["idCliente"])->value('name');
        $data["email"] = DB::table('users')->where('id',$request["idCliente"])->value('email');
        $data["instagram"] = DB::table('users')->where('id',$request["idCliente"])->value('instagram');
        return view('verCliente')->with("data", $data);
    }
    
}
