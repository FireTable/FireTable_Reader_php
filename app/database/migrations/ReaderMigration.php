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
            $table->string('background')->default('#f5f5f9');
            $table->string('fontSize')->default('30');
            $table->string('user_id');
            $table->timestamps();
        });
    }
}
