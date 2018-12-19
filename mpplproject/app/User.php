<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'NIP', 'avatar', 'name', 'email', 'password', 'jabatan', 'no_telp', 'education', 'notes', 'ruangan'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function account()
    {
       return $this->hasOne('App\Profile', 'profile_id');
    }

    public function DaftarSurat() {
        return $this->hasMany('App\Surat', 'idpenerima', 'id');
    }
}
