<?php

class Auth {
	
	private $db;

	public function __construct(Database $database) {
		$this->db = $database;
	}

	public function build() {
		return $this->db->query("
			CREATE TABLE IF NOT EXISTS users
			(id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, 
			email VARCHAR(255) NOT NULL UNIQUE, 
			username VARCHAR(25) UNIQUE, 
			password VARCHAR(255) NOT NULL)
		");
	}
}