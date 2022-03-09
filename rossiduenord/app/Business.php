<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Business extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name', 
        'referent', 
        'referent_phone',
        'email', 
        'password', 
        'type', 
        'p_iva', 
        'c_f', 
        'legal_form', 
        'rea', 
        'c_ateco', 
        'reg_date',
        'created_by',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
