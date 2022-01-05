<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempatWisata extends Model
{
    protected $table = 'tempat_wisata';

    protected $fillable = ['nama_wisata', 'alamat_wisata', 'foto_wisata', 'fasilitas_wisata', 'harga_wisata',];


    // public function pemesanantiketnew()
    // {
    //     return $this->hasMany(PemesananTiketnew::class, 'tempat_wisata_id');
    // }
    
    // public function BundlingTiket(){
    //     return $this->hasMany(BundlingTiket::class);
    // }
}