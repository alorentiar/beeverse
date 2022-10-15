<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('gender'); //true for male, false for female
            $table->string('iglink');
            $table->string('mobilenum');
            $table->string('oldpp')->nullable();
            $table->string('profilepic'); //random from pp hobby
            $table->integer('regisprice')->nullable();
            // $table->boolean('ispay')->default(false);
            // $table->integer('wallet')->nullable();
            $table->integer('coin')->default(0);//langsung ke coin karena kalo ada sisa larinya convert ke coin
            $table->boolean('visible')->default(true); //true for visible, false for invisible
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
