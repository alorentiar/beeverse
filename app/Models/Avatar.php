<?php

namespace App\Models;

use App\Models\User;
use App\Models\OwnedAvatar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Avatar extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function user(){
    //     return $this->belongsTo(User::class,'user_id');
    // }

    public function ownedAvatar(){
        return $this->belongsTo(OwnedAvatar::class);
    }

}
