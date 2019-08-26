<?php

use Illuminate\Database\Seeder;
use App\Models\Factura;
class facturaFactory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Models\Vendedor::class,5)->create()
       ->each(function($vendedor){
       	$vendedor->facturas()->save(factory(App\Models\Factura::class)->make());
       });


    }
}
