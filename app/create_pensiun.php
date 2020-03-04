<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\pensiun;

class create_pensiun extends Model
{
    protected $table='pensiun';
    protected $fillable =[
        'pegawai_id','waktu_pensiun','nama_pensiun'
    ];

    public function pegawai(){
        return $this->belongsTo('App\create_pegawai');
    }

}
