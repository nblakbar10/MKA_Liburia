<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    protected $table = 'follower';

    protected $fillable = ['follower_id', 'user_id'];

    public function users(){
        return $this->belongsToMany(User::class, 'user_id');
    }
}
