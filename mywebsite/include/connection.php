<?php

$dsn = 'mysql:host=localhost;dbname=myweb';
$username = 'root';
$password = '';
// $dsn = 'mysql:host=localhost;dbname=D00251954';
// $username = 'D00251954';
// $password = 'VL70H6nQ';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    exit();
}
?>