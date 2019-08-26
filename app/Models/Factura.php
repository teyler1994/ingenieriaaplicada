<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';
	protected $fillable = [
	    'fecha_factura',
	    'medio_pago',
	    'observaciones',
	    'Cod_Cliente',
	    'Cod_Vendedor'


	];

	public function vendedor(){
		return $this->belongsTo('App\Models\Vendedor','Cod_Vendedor');
	}

	public function cliente(){
		return $this->belongsTo('App\Models\Cliente','Cod_Cliente');
	}

}
