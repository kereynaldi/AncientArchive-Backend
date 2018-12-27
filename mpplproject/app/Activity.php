<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'activities';
    protected $primaryKey = 'id';
    protected $fillable = [
         'avatar', 'perihal', 'status', 'archive_stat', 'id_user_act', 'id_surat_act',
    ];

    public function user_list()
    {
        return $this->belongsTo('App\User', 'id_user_act');
    }

    public function surat_list()
    {
        return $this->belongsTo('App\Surat', 'id_surat_act');
    }

}
