<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $id_proveedor
 * @property $id_categoria
 * @property $nombre
 * @property $descripcion
 * @property $precio
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property DetalleFactura[] $detalleFacturas
 * @property Proveedore $proveedore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'id_proveedor' => 'required',
		'id_categoria' => 'required',
		'nombre' => 'required',
		'descripcion' => 'required',
		'precio' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_proveedor','id_categoria','nombre','descripcion','precio','cantidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'id_categoria');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleFacturas()
    {
        return $this->hasMany('App\Models\DetalleFactura', 'id_producto', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedore()
    {
        return $this->hasOne('App\Models\Proveedore', 'id', 'id_proveedor');
    }
    

}
