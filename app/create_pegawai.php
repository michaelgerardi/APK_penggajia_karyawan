<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class create_pegawai extends Model
{
    protected $table = 'pegawai';
    protected $fillable=['nama_pegawai','jenis_kelamin','tgl_lahir','alamat','gaji_pokok'
     ,'tanggal_masuk'];
    // protected $primaryKey = 'id_pegawai';
}
