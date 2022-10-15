<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnedAvatar extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function avatar(){
        return $this->hasOne(Avatar::class,'avatar_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
