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
        //Creacion tabla Productos
        // php artisan migrate = migra este archivo a la BD
        Schema::create('tbproductos', function (Blueprint $table) {
            
            $table->engine="InnoDB"; //cascada
            $table->bigIncrements('idproducto'); //autoincremento en tabla
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('marca');
            $table->string('categoria');
            $table->string('codigo');
            $table->timestamps(); //tiempo registrado

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
    }
};
