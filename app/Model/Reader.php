<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Reader extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'reader';

	protected $fillable = [
		'id',
		'background',
		'fontSize',
		'user_id',
		'created_at',
		'updated_at',
];


}
