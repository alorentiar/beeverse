<?php

namespace Database\Seeders;

use App\Models\Hobby;
use Illuminate\Database\Seeder;

class HobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $hob = new Hobby();
        $hob->hobby = "Gaming";
        $hob->hobbypic = "hob1.jpg";
        $hob->save();

        $hob = new Hobby();
        $hob->hobby = "Play Sports";
        $hob->hobbypic = "hob2.jpg";
        $hob->save();

        $hob = new Hobby();
        $hob->hobby = "Listen Music";
        $hob->hobbypic = "hob3.png";
        $hob->save();

        $hob = new Hobby();
        $hob->hobby = "Watch Movies";
        $hob->hobbypic = "hob4.png";
        $hob->save();

        $hob = new Hobby();
        $hob->hobby = "Gardening";
        $hob->hobbypic = "hob5.jpg";
        $hob->save();

        $hob = new Hobby();
        $hob->hobby = "Stamp Collecting";
        $hob->hobbypic = "hob6.jpeg";
        $hob->save();

        $hob = new Hobby();
        $hob->hobby = "Fishing";
        $hob->hobbypic = "hob7.jpg";
        $hob->save();

        $hob = new Hobby();
        $hob->hobby = "Reading";
        $hob->hobbypic = "hob8.jpg";
        $hob->save();

        $hob = new Hobby();
        $hob->hobby = "Drawing";
        $hob->hobbypic = "hob9.jpg";
        $hob->save();
    }
}
