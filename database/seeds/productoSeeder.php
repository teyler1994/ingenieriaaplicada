<?php

use Illuminate\Database\Seeder;
use App\Models\Producto;

class productoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([ 
         'nombre_producto' => 'jarabe',
         'costo_producto'  => 10000,
         'estilo' => 'botella',
         'color' => 'negro',
         'talla'=> 's'

        ]);
    }
}
