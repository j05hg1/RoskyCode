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
        Schema::create('facturas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('id_cliente')->unsigned();
            $table->bigInteger('id_empleado')->unsigned();
            $table->date('fecha');
            $table->integer('total_factura');
            $table->timestamps();
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete("cascade");
            $table->foreign('id_empleado')->references('id')->on('empleados')->onDelete("cascade");
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
};
