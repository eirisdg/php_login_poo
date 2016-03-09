<?php

class Database {
	protected $host = 'localhost';
	protected $db = 'betting';
	protected $username = 'root';
	protected $password = 'root';
	protected $pdo;
	public $debug = true;

	public function __construct() {
		try {
			$this->pdo = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->username, $this->password);
			if ($this->debug) {
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
		} catch (PDOException $e) {
			// Esto corresponde a un IF. Si $this->debug es true, que muestre el mensaje, si no, que muestre vacio.
			die($this->debug ?  $e->getMessage() : '');
		}
	}

	public function query($sql) {
		return $this->pdo->query($sql);
	}

	public function table($table) {
		$this->table=$table;
		return $this;
	}

	public function insert($data) {
		$keys = array_keys($data);
		echo $fields = '`' . implode('`, `', $keys) . '`';
		$sql ="";
	}
}