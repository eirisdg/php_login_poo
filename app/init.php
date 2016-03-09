<?php

ini_set('display_errors', 'on'); 

session_start();

$app = __DIR__;

require_once "{$app}/classes/Database.php";
require_once "{$app}/classes/Auth.php";

$database = new Database;

$database->table('users')->insert([
	'email' => 'tupacsoul@gmail.com',
	'username' => 'eirisdg',
	'password' => 'pass'
	]);


$auth = new Auth($database);