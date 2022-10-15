<?php

namespace App\Models;

use App\Models\Hobby;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChosenHobby extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function gohobby(){
        return $this->hasOne(Hobby::class,'id','id_hobby');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
