<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;
    // Si especificamos la tabla a la que hace referencia, utiliza esa tabla directamente.
    protected $table = "ofertas"; // Si eliminamos esta propiedad, utiliza la tabla ofertas por convencion de Laravel

}
