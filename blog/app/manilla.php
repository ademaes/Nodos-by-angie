<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Manilla extends Model{
    protected $fillable = ['dueno', 'tamano', 'estilo', 'colores' ];
    public function getId(){
        return $this->attributes['id'];
    }

    public function getDueno(){ 
        return $this->attributes['dueno'];
    }

    public function getTamano(){
        return $this->attributes['tamano'];
    }
    public function getEstilo(){
        return $this->attributes['esrtilo'];
    }

    public function getColores(){
        return $this->attributes['colores'];
    }
    public static function createManilla($data){
        DB::table('manillas')->insert($data);
    }
    public static function updateEstilo($id, $estilo){
        DB::table('manillas')
            ->where('id',$id)
            ->update($estilo);
    }

    public static function updateColores($id, $colores){
        DB::table('manillas')
            ->where('id',$id)
            ->update($colores);
    }
}
