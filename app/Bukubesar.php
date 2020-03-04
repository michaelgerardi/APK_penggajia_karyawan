<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bukubesar extends Model
{
    protected $table='vbukubesar';
    protected $fillable=['waktu_gaji','gaji_bersih'];
}
