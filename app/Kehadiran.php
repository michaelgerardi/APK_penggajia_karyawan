<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    protected $table='kehadiran';
    protected $fillable=['pegawai_id','tanggal_kehadiran','waktu_masuk','waktu_keluar'];
    public function pegawai(){
        return $this->belongsTo('App\create_pegawai');
    }
}
