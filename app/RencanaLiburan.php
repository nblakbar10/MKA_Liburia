<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RencanaLiburan extends Model
{
    protected $table = 'rencana_liburan';

    protected $fillable = ['nama_rencana', 'deskripsi_rencana', 'user_id'];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
