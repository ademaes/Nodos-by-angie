<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Entrega extends Model{
    protected $fillable = ['fecha', 'hInicial', 'hFinal', 'idManilla', 'id'];
    public function getId(){
        return $this->attributes['id'];
    }

    public function getFecha(){ 
        return $this->attributes['fecha'];
    }

    public function getHInicial(){
        return $this->attributes['hInicial'];
    }
    public function getHfinal(){
        return $this->attributes['hFinal'];
    }

    public function getIdManilla(){
        return $this->attributes['idManilla'];
    }
    public static function createManilla($data){
        DB::table('entregas')->insert($data);
    }
    public static function updateIdManilla($id, $idManilla){
        DB::table('entregas')
            ->where('id',$id)
            ->update($idManilla);
    }
}
