<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class create_pangkat extends Model
{
    protected $table='pangkat';
    protected $fillable=[
        'pegawai_id','nama_pangkat','gaji_maksimum','gaji_minimun'
    ];
    public function pegawai(){
        return $this->belongsTo('App\create_pegawai');
    }
}
