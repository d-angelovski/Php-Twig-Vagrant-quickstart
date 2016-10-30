<?php

namespace info\angelovski\Models;

class User {
	private $firstname,
			$lastname,
			$username,
			$email;

	function __construct(){
		// you could use constructor to initialize a user
		// from DB for example, by passing MySQL array from PDO
		return $this;
	}
	public function getFirstname() {
		return $this->firstname;
	}
	public function setFirstname($firstname) {
		$this->firstname = $firstname;
		return $this;
	}
	public function getLastname() {
		return $this->lastname;
	}
	public function setLastname($lastname) {
		$this->lastname = $lastname;
		return $this;
	}
	public function getUsername() {
		return $this->username;
	}
	public function setUsername($username) {
		$this->username = $username;
		return $this;
	}
	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->email = $email;
		return $this;
	}
}