<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Facturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_factura');
            $table->string('medio_pago');
            $table->string('observaciones');
            $table->integer('Cod_Cliente')->unsigned();
            $table->integer('Cod_Vendedor')->unsigned();


            $table->foreign('Cod_Cliente')
                   ->references('id')
                   ->on('clientes');

            $table->foreign('Cod_Vendedor')
                  ->references('id')
                  ->on('vendedores');
                    


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
