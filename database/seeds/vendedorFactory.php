<?php

use Illuminate\Database\Seeder;


class vendedorFactory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendedores = factory(App\Models\Vendedor::class, 5)
        ->create()
        ->each(function ($vendedor){
            $vendedor->facturas()->save(factory(App\Models\Factura::class)
               ->make());

        });
    }


}
