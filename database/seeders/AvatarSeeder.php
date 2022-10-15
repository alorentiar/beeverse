<?php

namespace Database\Seeders;

use App\Models\Avatar;
use Illuminate\Database\Seeder;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $avatar = new Avatar();
        $avatar->title = "Please Bunny";
        $avatar->content = "ava1.png";
        $avatar->price = 50;
        $avatar->save();

        $avatar = new Avatar();
        $avatar->title = "Rabbit Carrot";
        $avatar->content = "ava2.png";
        $avatar->price = 100;
        $avatar->save();

        $avatar = new Avatar();
        $avatar->title = "Suspicous Rabbit";
        $avatar->content = "ava3.png";
        $avatar->price = 1000;
        $avatar->save();

        $avatar = new Avatar();
        $avatar->title = "So Fun Hamster";
        $avatar->content = "ava4.png";
        $avatar->price = 2500;
        $avatar->save();

        $avatar = new Avatar();
        $avatar->title = "Running Hamster";
        $avatar->content = "ava5.png";
        $avatar->price = 5000;
        $avatar->save();

        $avatar = new Avatar();
        $avatar->title = "Angry Hamster";
        $avatar->content = "ava6.png";
        $avatar->price = 10000;
        $avatar->save();

        $avatar = new Avatar();
        $avatar->title = "Curious Hamster";
        $avatar->content = "ava7.png";
        $avatar->price = 20000;
        $avatar->save();

        $avatar = new Avatar();
        $avatar->title = "Little Cute Wibu";
        $avatar->content = "ava8.png";
        $avatar->price = 50000;
        $avatar->save();

        $avatar = new Avatar();
        $avatar->title = "Smiling Crush";
        $avatar->content = "ava9.png";
        $avatar->price = 75000;
        $avatar->save();

        $avatar = new Avatar();
        $avatar->title = "Imaginary Girl";
        $avatar->content = "ava10.png";
        $avatar->price = 100000;
        $avatar->save();
    }
    
}
