<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Dummy data for user
        //user1
        $user = new User();
        $user->name = "Alfredo Lorentiar";
        $user->email = "alfredo@binus.ac.id";
        $user->password = bcrypt("Test1234");
        $user->gender = true;
        $user->iglink = "https://www.instagram.com/alfrdlrs";
        $user->mobilenum = "082231297873";
        $user->profilepic = "hob1.jpg";
        $user->regisprice = 101000;
        $user->coin = 5000;
        $user->save();

        //user2
        $user = new User();
        $user->name = "Reinert Yosua";
        $user->email = "reinert@binus.ac.id";
        $user->password = bcrypt("Test1234");
        $user->gender = true;
        $user->iglink = "https://www.instagram.com/reinertyosua";
        $user->mobilenum = "089988881111";
        $user->profilepic = "hob2.jpg";
        $user->regisprice = 101000;
        $user->coin = 130000;
        $user->save();

        //user3
        $user = new User();
        $user->name = "Michael Kurniawan";
        $user->email = "mk@binus.ac.id";
        $user->password = bcrypt("Test1234");
        $user->gender = true;
        $user->iglink = "https://www.instagram.com/dummy";
        $user->mobilenum = "088811112222";
        $user->profilepic = "hob3.png";
        $user->regisprice = 101000;
        $user->coin = 800;
        $user->save();

        //user4
        $user = new User();
        $user->name = "Kevin Sanjaya";
        $user->email = "ks@binus.ac.id";
        $user->password = bcrypt("Test1234");
        $user->gender = true;
        $user->iglink = "https://www.instagram.com/dummy";
        $user->mobilenum = "088811112222";
        $user->profilepic = "hob4.png";
        $user->regisprice = 101000;
        $user->coin = 400;
        $user->save();

        //user5
        $user = new User();
        $user->name = "Isyana Sarasvati";
        $user->email = "is@binus.ac.id";
        $user->password = bcrypt("Test1234");
        $user->gender = false;
        $user->iglink = "https://www.instagram.com/isyanasarasvati/";
        $user->mobilenum = "088811112222";
        $user->profilepic = "hob5.jpg";
        $user->regisprice = 101000;
        $user->coin = 300;
        $user->save();

        //user6
        $user = new User();
        $user->name = "John Setiawan";
        $user->email = "js@binus.ac.id";
        $user->password = bcrypt("Test1234");
        $user->gender = true;
        $user->iglink = "https://www.instagram.com/dummy";
        $user->mobilenum = "088811112222";
        $user->profilepic = "hob6.jpeg";
        $user->regisprice = 101000;
        $user->coin = 400;
        $user->save();

        //user7
        $user = new User();
        $user->name = "Bambang Siswanto";
        $user->email = "bs@binus.ac.id";
        $user->password = bcrypt("Test1234");
        $user->gender = true;
        $user->iglink = "https://www.instagram.com/dummy";
        $user->mobilenum = "088811112222";
        $user->profilepic = "hob7.jpg";
        $user->regisprice = 101000;
        $user->coin = 400;
        $user->save();

        //user8
        $user = new User();
        $user->name = "Alex Freddy";
        $user->email = "af@binus.ac.id";
        $user->password = bcrypt("Test1234");
        $user->gender = true;
        $user->iglink = "https://www.instagram.com/dummy";
        $user->mobilenum = "088811112222";
        $user->profilepic = "hob8.jpg";
        $user->regisprice = 101000;
        $user->coin = 400;
        $user->save();

        //user9
        $user = new User();
        $user->name = "Sulis Setiawati";
        $user->email = "ss@binus.ac.id";
        $user->password = bcrypt("Test1234");
        $user->gender = false;
        $user->iglink = "https://www.instagram.com/dummy";
        $user->mobilenum = "088811112222";
        $user->profilepic = "hob9.jpg";
        $user->regisprice = 101000;
        $user->coin = 400;
        $user->save();


    }
}
