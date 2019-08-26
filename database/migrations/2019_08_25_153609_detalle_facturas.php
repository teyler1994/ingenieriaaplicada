<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleFacturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->double('cant_prod_vendido');
            $table->double('precio_de_venta');
            $table->integer('Cod_Factura')->unsigned();
            $table->integer('Cod_Producto')->unsigned();

            $table->foreign('Cod_Factura')
                   ->references('id')
                   ->on('facturas');


             $table->foreign('Cod_Producto')
                   ->references('id')
                   ->on('productos');

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
        Schema::dropIfExists('detalle_facturas');
    }
}
