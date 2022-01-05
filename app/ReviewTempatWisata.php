<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// class ReviewTempatWisata extends Model
// {
    
//     protected $casts = [
//         'created_at' => 'datetime:Y-m-d H:i',
//         'updated_at' => 'datetime:Y-m-d H:i'
//     ];
// }


class ReviewTempatWisata extends Model
{
    protected $table = 'review_tempat_wisata';
    protected $primaryKey = "id";

    protected $fillable = ['review', 'rating', 'user_id'];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i',
        'updated_at' => 'datetime:Y-m-d H:i'
    ];
}