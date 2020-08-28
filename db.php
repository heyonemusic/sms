<?php

require_once 'recount.php';

$dbh = new PDO('mysql:host=localhost;dbname=sms', 'root', 'root');

$data = [
	'symbols' => $symbols,
	'count' => $count,
];

$sql = "INSERT INTO sms (symbols, count) VALUES (:symbols, :count)";
$stmt= $dbh->prepare($sql);
$stmt->execute($data);
return $stmt;