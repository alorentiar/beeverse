<?php

namespace Database\Seeders;

use App\Models\Wishlist;
use Illuminate\Database\Seeder;

class WishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user1
        $wish = new Wishlist();
        $wish->user_id_own = 1;
        $wish->user_id_wish = 2;
        $wish->isThumb_own = 1;
        $wish->isThumb_wish = 0;
        $wish->save();

        //user2
        $wish = new Wishlist();
        $wish->user_id_own = 2;
        $wish->user_id_wish = 3;
        $wish->isThumb_own = 1;
        $wish->isThumb_wish = 1;
        $wish->save();

        //user3
        $wish = new Wishlist();
        $wish->user_id_own = 3;
        $wish->user_id_wish = 4;
        $wish->isThumb_own = 1;
        $wish->isThumb_wish = 1;
        $wish->save();

        //user4
        $wish = new Wishlist();
        $wish->user_id_own = 4;
        $wish->user_id_wish = 5;
        $wish->isThumb_own = 1;
        $wish->isThumb_wish = 0;
        $wish->save();

        //user5
        $wish = new Wishlist();
        $wish->user_id_own = 5;
        $wish->user_id_wish = 6;
        $wish->isThumb_own = 1;
        $wish->isThumb_wish = 0;
        $wish->save();

        //user6
        $wish = new Wishlist();
        $wish->user_id_own = 6;
        $wish->user_id_wish = 7;
        $wish->isThumb_own = 1;
        $wish->isThumb_wish = 1;
        $wish->save();

        //user7
        $wish = new Wishlist();
        $wish->user_id_own = 7;
        $wish->user_id_wish = 8;
        $wish->isThumb_own = 1;
        $wish->isThumb_wish = 1;
        $wish->save();

        //user8
        $wish = new Wishlist();
        $wish->user_id_own = 8;
        $wish->user_id_wish = 9;
        $wish->isThumb_own = 1;
        $wish->isThumb_wish = 1;
        $wish->save();

        //user8
        $wish = new Wishlist();
        $wish->user_id_own = 9;
        $wish->user_id_wish = 1;
        $wish->isThumb_own = 1;
        $wish->isThumb_wish = 0;
        $wish->save();

    }
}
