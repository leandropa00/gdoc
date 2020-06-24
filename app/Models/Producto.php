<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Producto
 * @package App\Models
 * @version June 24, 2020, 9:17 am -05
 *
 * @property \App\Models\CategoriaProducto $categoria
 * @property string $nombre
 * @property string $marca
 * @property string $modelo
 * @property string $serie
 * @property integer $cantidad
 * @property string $fecha_ingreso
 * @property integer $categoria_id
 */
class Producto extends Model
{
    use SoftDeletes;

    public $table = 'productos';
    
    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
        'marca',
        'modelo',
        'serie',
        'cantidad',
        'fecha_ingreso',
        'categoria_id',
        'foto_factura',
        'foto_manual'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'marca' => 'string',
        'modelo' => 'string',
        'serie' => 'string',
        'cantidad' => 'integer',
        'fecha_ingreso' => 'date,Y-m-d',
        'categoria_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'marca' => 'required',
        'modelo' => 'required',
        'serie' => 'required',
        'cantidad' => 'required|numeric',
        'fecha_ingreso' => 'required|date',
        'categoria_id' => 'required'
    ];

    public static $messages = [
        'nombre.required' => 'Ingresa el nombre',
        'marca.required' => 'Ingresa la marca',
        'modelo.required' => 'Ingresa el modelo',
        'serie.required' => 'Ingresa la serie',
        'cantidad.required' => 'Ingresa la cantidad',
        'cantidad.numeric' => 'La cantidad debe ser numérica',
        'fecha_ingreso.required' => 'Ingresa la fecha',
        'fecha_ingreso.date' => 'La fecha ingresada es inválida',
        'categoria_id.required' => 'Selecciona una categoría',
    ];
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function categoria()
    {
        return $this->belongsTo(\App\Models\CategoriaProducto::class, 'categoria_id', 'id');
    }
}
