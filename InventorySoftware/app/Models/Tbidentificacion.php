<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbidentificacion
 *
 * @property $ididentificacion
 * @property $nombre
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tbidentificacion extends Model
{
    
    static $rules = [
		'ididentificacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ididentificacion','nombre'];



}
