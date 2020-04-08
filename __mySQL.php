<?php
$host = 'locahost';
$name = 'dont';
$user = 'akane';
$pass = '1000';

$dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8', $host, $name);
$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_COMPRESS => "SET NAMES utf8"
];
try {
    $pdo = new PDO($dse, $user, $pass, $pdo_options);
} catch (PDOException $ex) {
    echo 'EX:' . $ex->getMessage();
};
