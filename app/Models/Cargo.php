<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
/**
 * Class Cargo
 * @package App\Models
 * @version June 23, 2020, 10:06 pm -05
 *
 * @property string $nombre
 */
class Cargo extends Model
{
    use SoftDeletes;

    public $table = 'cargos';
    
    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'cargos_usuarios', 'cargo_id', 'usuario_id');
    }
}
