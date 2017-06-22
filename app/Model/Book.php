<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Book extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'book';

	protected $fillable = [
		'id',
		'book_name',
		'book_icon',
		'book_page',
		'book_id',
		'user_id',
		'created_at',
		'updated_at',
];


}
