<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle_factura extends Model
{
    protected $table = 'detalle_facturas';
	protected $fillable = [

		'id',
		'cant_prod_vendido',
		'precio_de_venta',
		'Cod_Factura',
		'Cod_Producto'


	];
}
