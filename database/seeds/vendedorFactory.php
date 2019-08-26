<?php

use Illuminate\Database\Seeder;
use App\Models\Vendedor;

class vendedorFactory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendedor::create([

        'antiguedad_vendedor' => 20, 


        ])
    }
}
