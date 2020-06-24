<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CategoriaProducto
 * @package App\Models
 * @version June 24, 2020, 9:15 am -05
 *
 * @property string $nombre
 * @property string $descripcion
 */
class CategoriaProducto extends Model
{
    use SoftDeletes;

    public $table = 'categoria_productos';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'descripcion' => 'required'
    ];

    public static $messages = [
        'nombre.required' => 'Ingresa el nombre',
        'descripcion.required' => 'Ingresa la descripción'
    ];    
}
