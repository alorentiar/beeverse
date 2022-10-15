<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\HobbySeeder;
use Database\Seeders\AvatarSeeder;
use Database\Seeders\ChosenHobbySeeder;
use Database\Seeders\OwnedAvatarSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            AvatarSeeder::class,
            OwnedAvatarSeeder::class,
            HobbySeeder::class,
            ChosenHobbySeeder::class,
            WishlistSeeder::class
        ]);
    }
}
