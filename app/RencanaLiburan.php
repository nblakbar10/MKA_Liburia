<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RencanaLiburan extends Model
{
    protected $table = 'rencana_liburan';

    protected $filable = ['nama_rencana', 'deskripsi_rencana'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
