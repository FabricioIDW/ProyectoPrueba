<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;
    // Si especificamos la tabla a la que hace referencia, utiliza esa tabla directamente.
    protected $table = "ofertas"; // Si eliminamos esta propiedad, utiliza la tabla ofertas por convencion de Laravel
    // protected $fillable = ['descuento', 'fechaInicio', 'fechaFin']; //Solo guarda valores para estos campos cuando se crea un registro
    protected $guarded = []; //Eloquent ignora estos campos para que esten protegidos

    // Sobreescribe el método de la clase Model
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}
