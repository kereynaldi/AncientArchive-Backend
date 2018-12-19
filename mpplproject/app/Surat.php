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
      'image', 'no_surat', 'asal_surat', 'tujuan_surat', 'perihal', 'jenis_surat', 'tanggal_masuk', 'tanggal_dibuat', 'deskripsi', 'nama_penerima','telfon_penerima', 'email_penerima', 'Status', 'archived_status', 'idpenerima',
  ];

  public function pengunggah()
    {
        return $this->belongsTo('App\User', 'idpenerima');
    }

}
