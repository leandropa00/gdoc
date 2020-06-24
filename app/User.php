<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Cargo;
/**
 * Class User
 * @package App\Models
 * @version June 23, 2020, 9:28 pm -05
 *
 * @property \Illuminate\Database\Eloquent\Collection $cargos
 * @property string $name
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property integer $cargo_id
 */
class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    public $table = 'users';
    
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'remember_token' => 'string',
        'email_verified_at' => 'datetime',
        'cargo_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required|unique:users|email'
    ];

    public static $messages = [
        'name.required' => 'Ingresa el nombre',
        'email.required' => 'Ingresa el correo electrónico',
        'email.unique' => 'El correo electrónico ingrasado ya existe',
        'email.email' => 'El correo electrónico ingresado no es válido'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cargos()
    {
        return $this->belongsToMany(Cargo::class, 'cargos_usuarios', 'usuario_id', 'cargo_id');
    }
}