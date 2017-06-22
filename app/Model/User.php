<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;


class User extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user';

	protected $fillable = [
		'id',
		'nickname',
		'username',
		'icon',
		'password',
		'created_at',
		'updated_at',
];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	 protected $hidden = [
		 //不显示
		 'password',
 ];
}
