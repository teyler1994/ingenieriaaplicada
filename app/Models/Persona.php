<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
   protected $table = 'personas';
	protected $fillable = [

		'id',
		'nombre_persona',
		'direccion',
		'telefono',
		'genero',
		'rol'
 
}
