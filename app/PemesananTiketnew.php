<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemesananTiketnew extends Model
{
    protected $table = 'pemesanan_tiketnew';

    protected $fillable = ['tanggal_pesan', 'jumlah_pesan', 'total_harga', 'keterangan', 'status'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
