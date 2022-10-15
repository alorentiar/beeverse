<?php

namespace App\Models;

use App\Models\User;
use App\Models\ChosenHobby;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hobby extends Model
{
    use HasFactory;

    protected $guarded =[];

    // public function user(){
    //     return $this->belongsTo(User::class,'user_id');
    // }

    public function chosenHobby(){
        return $this->belongsTo(ChosenHobby::class,'id_hobby','id');
    }
}
