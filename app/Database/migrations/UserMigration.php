<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class UserMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('user');
        Capsule::schema()->create('user', function($table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('icon')->default('http://opzvozftr.bkt.clouddn.com/Fh_8dwU-OUZ4ryZfEI0A6xC-GJRr');
            $table->string('nickname')->nullable();
            $table->timestamps();
        });
    }
}
