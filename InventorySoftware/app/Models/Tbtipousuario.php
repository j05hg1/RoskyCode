<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbtipousuario
 *
 * @property $idtipousuario
 * @property $nombre
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tbtipousuario extends Model
{
    
    static $rules = [
		'idtipousuario' => 'required',
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idtipousuario','nombre'];



}
