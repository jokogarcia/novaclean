<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *   
     */
    protected $fillable = [
        'name', 'email', 'password', 'dni', 'last_name', 'dni', 'phone',
        'photo_url', 'home_address', 'cuit', 'gender', 'nationality',
        'localidad_id','cv_id','user_class_id'
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'cuit' => 'integer',
        'localidad_id' => 'integer',
        'cv_id' => 'integer',
        'user_class_id' => 'integer'
        
    ];
}
