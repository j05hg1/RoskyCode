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
        //
        Schema::create('productos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('id_proveedor')->unsigned();
            $table->bigInteger('id_categoria')->unsigned();
            $table->string('nombre');
            $table->text('descripcion');            
            $table->integer('precio');
            $table->integer('cantidad');
            $table->timestamps();
            $table->foreign('id_proveedor')->references('id')->on('proveedores')->onDelete("cascade");
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('productos');
    }
};
