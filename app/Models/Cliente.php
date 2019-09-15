<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
	protected $fillable = [

		'id',
		'ciudad_cliente',
		'localidad_cliente',
		'edad_cliente'
	];

	public function factura(){
		return $this->hasMany('App/Models/Factura', 'Cod_cliente');
	}
}
