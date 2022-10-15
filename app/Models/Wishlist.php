<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function userOwn(){
        return $this->belongsTo(User::class,'user_id_own');
    }

    public function userWish(){
        return $this->belongsTo(User::class,'user_id_wish');
    }
}
