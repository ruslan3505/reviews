<?php

class db
{
	public static function connect()
	{
		$pdo = new PDO('mysql:dbname=reviews; host=localhost', 'root', 'root');

		return $pdo;
	}
}