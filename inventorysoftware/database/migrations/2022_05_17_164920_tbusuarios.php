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
        //Creacion tabla Usuarios
        // php artisan migrate = migra este archivo a la BD
        Schema::create('tbusuarios', function (Blueprint $table) {
            
            $table->engine="InnoDB"; //cascada
            $table->bigIncrements('idusuario'); //autoincremento en tabla
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('telefono');
            $table->timestamps(); //tiempo registrado

            /* ejemplo a tablas relacionadas
            $table->foreign("idtipousuario")->references("idtipousuario")->on("tbtipousuarios")->onDelete("cascade");
            $table->foreign("ididentificacion")->references("ididentificacion")->on("tbtipoidentificacion")->onDelete("cascade");
            */

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
