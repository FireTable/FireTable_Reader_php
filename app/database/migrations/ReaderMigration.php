<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class ReaderMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('reader');
        Capsule::schema()->create('reader', function($table) {
            $table->increments('id');
            $table->string('background');
            $table->string('fontSize');
            $table->string('user_id');
            $table->timestamps();
        });
    }
}
