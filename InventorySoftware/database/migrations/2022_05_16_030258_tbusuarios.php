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
        Schema::create('tbusuarios', function (Blueprint $table) {
            $table->engine="InnoDb";
            $table->bigIncrements('idusuario');
            $table->bigInteger('idtipousuario')->unsigned();
            $table->bigInteger('ididentificacion')->unsigned();
            $table->var("numero_identificacion");
            $table->var("nombre1");
            $table->var("nombre2");
            $table->var("apellido1");
            $table->var("apellido2");
            $table->var("nombre_usuario");
            $table->var("contraseña");
            $table->var("direccion");
            $table->var("correo");
            $table->var("telefono");
            $table->timestamps();

            $table->foreign("idtipousuario")->references("idtipousuario")->on("tbtipousuarios")->onDelete("cascade");
            $table->foreign("ididentificacion")->references("ididentificacion")->on("tbtipoidentificacion")->onDelete("cascade");
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
