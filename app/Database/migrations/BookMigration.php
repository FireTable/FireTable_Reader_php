<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Example migration for use with "novice"
 */
class BookMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('book');
        Capsule::schema()->create('book', function($table) {
            $table->increments('id');
            $table->string('book_name');
            $table->string('book_icon');
            $table->string('book_page');
            $table->string('book_id');
            $table->string('user_id');
            $table->timestamps();
        });
    }
}
