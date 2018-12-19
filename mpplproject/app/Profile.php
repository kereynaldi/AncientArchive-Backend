<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $table = 'profiles';

  	protected $fillable = [
    'education',
    'ruangan',
    'notes'
  ];

  public function user()
    {
    	return $this->belongsTo('App\User', 'profile_id');
    }
}