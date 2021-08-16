<?php

$pdo = db::connect();


$reviews = $pdo->query("SELECT
	reviews.*
FROM
	reviews")->fetchAll(PDO::FETCH_ASSOC);