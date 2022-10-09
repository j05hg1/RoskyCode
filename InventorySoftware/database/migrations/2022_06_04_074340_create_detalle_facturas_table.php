<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_facturas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('id_factura')->unsigned();
            $table->bigInteger('id_producto')->unsigned();
            $table->integer('cantidad_pedida');
            $table->integer('precio_unitario');
            $table->timestamps();
            $table->foreign('id_factura')->references('id')->on('facturas')->onDelete("cascade");
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete("cascade");
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
};
