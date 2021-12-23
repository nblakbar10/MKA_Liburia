<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Following extends Model
{
    protected $table = 'following';

    protected $fillable = ['following_id', 'user_id'];

    public function users(){
        return $this->belongsToMany(User::class, 'user_id');
    }
}
