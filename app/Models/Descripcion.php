<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Descripcion
 *
 * @property $id
 * @property $cantidad
 * @property $nombreDescripcion
 * @property $precioUnitario
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Descripcion extends Model
{
    
    static $rules = [
		'cantidad' => 'required',
		'nombreDescripcion' => 'required',
		'precioUnitario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cantidad','nombreDescripcion','precioUnitario'];



}
