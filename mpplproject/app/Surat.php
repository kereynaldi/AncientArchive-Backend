<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Surat extends Model
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $table = 'surats';
  protected $primaryKey = 'id';
  protected $fillable = [
      'image', 'subjek', 'asalsurat', 'tujuansurat', 'jenissurat', 'deskripsi', 'namapenerima','telfonpenerima', 'emailpenerima', 'Status', 'idpenerima',
  ];
}
