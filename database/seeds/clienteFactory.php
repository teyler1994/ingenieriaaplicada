<?php

use Illuminate\Database\Seeder;

class clienteFactory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $cliente = factory(App\Models\Cliente::class, 3)->create();
    }
}
