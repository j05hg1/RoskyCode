<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbusuario
 *
 * @property $idusuario
 * @property $idtipousuario
 * @property $ididentificacion
 * @property $numero_identificacion
 * @property $nombre1
 * @property $nombre2
 * @property $apellido1
 * @property $apellido2
 * @property $nombre_usuario
 * @property $contraseña
 * @property $direccion
 * @property $correo
 * @property $telefono
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tbusuario extends Model
{
    
    static $rules = [
		'idusuario' => 'required',
		'idtipousuario' => 'required',
		'ididentificacion' => 'required',
		'numero_identificacion' => 'required',
		'nombre1' => 'required',
		'apellido1' => 'required',
		'nombre_usuario' => 'required',
		'contraseña' => 'required',
		'correo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idusuario','idtipousuario','ididentificacion','numero_identificacion','nombre1','nombre2','apellido1','apellido2','nombre_usuario','contraseña','direccion','correo','telefono'];



}
