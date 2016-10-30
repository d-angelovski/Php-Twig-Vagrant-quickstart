<?php

namespace info\angelovski\Controllers;

use info\angelovski\Models\User;

/**
 * UserController is class for doing all operations connected
 * to users
 * @author Daniel
 *
 */
class UserController {

	function __construct(){

	}
	public function getLoggedInUser(){
		// this is just simple example, you could implement
		// your own logic that will check in database

		if(true){ // here you would check if the user is logged in
			$u = new User();
			$u->setEmail('email@gmail.com')
				->setFirstname('Daniel')
				->setLastname('Angelovski')
				->setUsername('angelovski');

			return $u;
		}

		return 0;
	}

	public function listAllUsers(){
		// Do it yourself
	}
}