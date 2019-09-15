<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'vendedores';
	protected $fillable = [

		'id',
		'antiguedad_vendedor',
        'especificaciones'


	];

	protected $casts = [
          'especificaciones' => 'array',
	];



	protected $appends = ['id_antiguedad'];


	public function getIdAntiguedadAttribute()
	{
       return "{$this->id} {$this->antiguedad_vendedor}";

	}

	public function getListFacturasAttribute()
	{
        return $this->facturas;
	}

	public function setNombreIdentificacion($value)
	{
           $this->attributes['antiguedad_vendedor'] = ucwords($value);
	}

	public function facturas(){
		return $this->hasMany('App\Models\Factura','Cod_Vendedor');
	}

    
}
