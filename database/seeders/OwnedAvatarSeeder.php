<?php

namespace Database\Seeders;

use App\Models\OwnedAvatar;
use Illuminate\Database\Seeder;

class OwnedAvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user1
        $ownAv = new OwnedAvatar();
        $ownAv->user_id = 1;
        $ownAv->avatar_id = 1;
        $ownAv->save();

        //user2
        $ownAv = new OwnedAvatar();
        $ownAv->user_id = 2;
        $ownAv->avatar_id = 1;
        $ownAv->save();

        $ownAv = new OwnedAvatar();
        $ownAv->user_id = 2;
        $ownAv->avatar_id = 3;
        $ownAv->save();

        $ownAv = new OwnedAvatar();
        $ownAv->user_id = 2;
        $ownAv->avatar_id = 7;
        $ownAv->save();

        //user3
        $ownAv = new OwnedAvatar();
        $ownAv->user_id = 3;
        $ownAv->avatar_id = 1;
        $ownAv->save();

        //user4
        $ownAv = new OwnedAvatar();
        $ownAv->user_id = 4;
        $ownAv->avatar_id = 1;
        $ownAv->save();

        //user5
        $ownAv = new OwnedAvatar();
        $ownAv->user_id = 5;
        $ownAv->avatar_id = 1;
        $ownAv->save();

        //user6
        $ownAv = new OwnedAvatar();
        $ownAv->user_id = 6;
        $ownAv->avatar_id = 1;
        $ownAv->save();

        //user7
        $ownAv = new OwnedAvatar();
        $ownAv->user_id = 7;
        $ownAv->avatar_id = 1;
        $ownAv->save();

        //user8
        $ownAv = new OwnedAvatar();
        $ownAv->user_id = 8;
        $ownAv->avatar_id = 1;
        $ownAv->save();

        //user9
        $ownAv = new OwnedAvatar();
        $ownAv->user_id = 9;
        $ownAv->avatar_id = 1;
        $ownAv->save();
    }
}
