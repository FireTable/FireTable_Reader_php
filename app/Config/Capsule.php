<?php

namespace App\Database;

use \Illuminate\Database\Capsule\Manager as CapsuleManager;
use \Illuminate\Container\Container;

class Capsule extends CapsuleManager
{

	public function __construct() {
		parent::__construct();

		$settings = array (
			'driver'    => 'mysql',
	    'host'      => '127.0.0.1',
	    'database'  => 'reader',
	    'username'  => 'root',
	    'password'  => 'root',
	    'charset'   => 'utf8',
	    'collation' => 'utf8_general_ci',
	    'prefix'    => ''
		);

		$this->addConnection($settings);
		$this->setAsGlobal();
		$this->bootEloquent();
	}

	public function ConnectionManager() {

	}
}
