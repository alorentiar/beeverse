<?php

namespace Database\Seeders;

use App\Models\ChosenHobby;
use Illuminate\Database\Seeder;

class ChosenHobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user1
        $chHobby = new ChosenHobby();
        $chHobby->user_id = 1;
        $chHobby->id_hobby = 1;
        $chHobby->save();

        $chHobby = new ChosenHobby();
        $chHobby->user_id = 1;
        $chHobby->id_hobby = 2;
        $chHobby->save();

        $chHobby = new ChosenHobby();
        $chHobby->user_id = 1;
        $chHobby->id_hobby = 3;
        $chHobby->save();

        //user2
        $chHobby = new ChosenHobby();
        $chHobby->user_id = 2;
        $chHobby->id_hobby = 2;
        $chHobby->save();

        $chHobby = new ChosenHobby();
        $chHobby->user_id = 2;
        $chHobby->id_hobby = 1;
        $chHobby->save();

        $chHobby = new ChosenHobby();
        $chHobby->user_id = 2;
        $chHobby->id_hobby = 3;
        $chHobby->save();

        //user3
        $chHobby = new ChosenHobby();
        $chHobby->user_id = 3;
        $chHobby->id_hobby = 3;
        $chHobby->save();

        $chHobby = new ChosenHobby();
        $chHobby->user_id = 3;
        $chHobby->id_hobby = 4;
        $chHobby->save();

        $chHobby = new ChosenHobby();
        $chHobby->user_id = 3;
        $chHobby->id_hobby = 5;
        $chHobby->save();

        //user4
        $chHobby = new ChosenHobby();
        $chHobby->user_id = 4;
        $chHobby->id_hobby = 4;
        $chHobby->save();

        $chHobby = new ChosenHobby();
        $chHobby->user_id = 4;
        $chHobby->id_hobby = 5;
        $chHobby->save();

        $chHobby = new ChosenHobby();
        $chHobby->user_id = 4;
        $chHobby->id_hobby = 6;
        $chHobby->save();

        //user5
        $chHobby = new ChosenHobby();
        $chHobby->user_id = 5;
        $chHobby->id_hobby = 5;
        $chHobby->save();

        $chHobby = new ChosenHobby();
        $chHobby->user_id = 5;
        $chHobby->id_hobby = 6;
        $chHobby->save();

        $chHobby = new ChosenHobby();
        $chHobby->user_id = 5;
        $chHobby->id_hobby = 7;
        $chHobby->save();

        //user6
        $chHobby = new ChosenHobby();
        $chHobby->user_id = 6;
        $chHobby->id_hobby = 6;
        $chHobby->save();

        $chHobby = new ChosenHobby();
        $chHobby->user_id = 6;
        $chHobby->id_hobby = 7;
        $chHobby->save();

        $chHobby = new ChosenHobby();
        $chHobby->user_id = 6;
        $chHobby->id_hobby = 8;
        $chHobby->save();

        //user7
        $chHobby = new ChosenHobby();
        $chHobby->user_id = 7;
        $chHobby->id_hobby = 7;
        $chHobby->save();

        $chHobby = new ChosenHobby();
        $chHobby->user_id = 7;
        $chHobby->id_hobby = 8;
        $chHobby->save();

        $chHobby = new ChosenHobby();
        $chHobby->user_id = 7;
        $chHobby->id_hobby = 9;
        $chHobby->save();

        //user8
        $chHobby = new ChosenHobby();
        $chHobby->user_id = 8;
        $chHobby->id_hobby = 8;
        $chHobby->save();

        $chHobby = new ChosenHobby();
        $chHobby->user_id = 8;
        $chHobby->id_hobby = 9;
        $chHobby->save();

        $chHobby = new ChosenHobby();
        $chHobby->user_id = 8;
        $chHobby->id_hobby = 2;
        $chHobby->save();

        //user9
        $chHobby = new ChosenHobby();
        $chHobby->user_id = 9;
        $chHobby->id_hobby = 9;
        $chHobby->save();

        $chHobby = new ChosenHobby();
        $chHobby->user_id = 9;
        $chHobby->id_hobby = 3;
        $chHobby->save();

        $chHobby = new ChosenHobby();
        $chHobby->user_id = 9;
        $chHobby->id_hobby = 2;
        $chHobby->save();
    }
}
