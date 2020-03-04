<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gaji extends Model
{
    protected $table ='gaji';
    protected $fillable=['pegawai_id', 'waktu_gaji','nominal_tunjangan','nominal_potongan','nominal_pajak'];
    public function pegawai(){
         return $this->belongsTo('App\create_pegawai');
     }
}
