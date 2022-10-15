<?php

namespace App\Models;

use App\Models\Hobby;
use App\Models\Avatar;
use App\Models\ChosenHobby;
use App\Models\OwnedAvatar;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array<int, string>
    //  */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    // /**
    //  * The attributes that should be hidden for serialization.
    //  *
    //  * @var array<int, string>
    //  */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    // /**
    //  * The attributes that should be cast.
    //  *
    //  * @var array<string, string>
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    protected $guarded = [];


    public function ownedAvatar(){
        return $this->hasMany(OwnedAvatar::class);
    }

    public function chosenHobby(){
        return $this->hasMany(ChosenHobby::class);
    }

    // public function hobby(){
    //     return $this->hasMany(Hobby::class);
    // }

    public function wishlist_own(){
        return $this->hasMany(Wishlist::class);
    }

    public function wishlist_wish(){
        return $this->hasMany(Wishlist::class);
    }
}
