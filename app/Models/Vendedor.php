<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'vendedores';
	protected $fillable = [

		'id',
		'antiguedad_vendedor'


	];

	public function facturas(){
		return $this->hasMany('App\Models\Factura','Cod_Vendedor');
	}


}
