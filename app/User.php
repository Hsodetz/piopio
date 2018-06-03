<?php

namespace App;

use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Caffeinated\Shinobi\Models\Role; //Hacemos uso para usar Role::


class User extends Authenticatable
{
    use HasApiTokens, Notifiable, ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id',
        'name', 
        'last_name',
        'age',
        'email', 
        'password', 
        'identification_document', 
        'province', 
        'city',
        'address', 
        'phone_movil',
        'phone_house',
        'sexo',
        'nationality',
        'occupation',
        'civil_status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsToMany(Role::class);// se debe usar de esta manera para tabla pivote
    }
 
}
