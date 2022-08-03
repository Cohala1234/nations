<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //la tabla a conectar
    protected $table = "continents";
    //la clave primaria de esa tabla
    protected $primaryKey = "continent_id";
    //omitir campos de auditoria
    public $timestamps = false;
    use HasFactory;

    public function regiones()
    {
        //Parameters
        //1. Linked model
        //2. Foreign key of current model into related model region
        return $this->hasMany(Region::class, 'continent_id');
    } 
}