<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemesananTiketnew extends Model
{
    protected $table = 'pemesanan_tiketnew';

    protected $filable = ['tanggal_pesan', 'jumlah_pesan', 'total_harga', 'keterangan', 'status'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
