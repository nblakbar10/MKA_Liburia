<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BundlingTiket extends Model
{
    protected $table = 'bundling_tiket';

    protected $filable = ['nama_bundling', 'deskripsi_bundling', 'harga_bundling'];

    //public function TempatWisata(){
        //return $this->belongsTo(TempatWisata::class);
    //}
    
}
