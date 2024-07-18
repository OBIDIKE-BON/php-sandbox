<?php
$host = 'localhost';
$port = '3308';
$dbName = 'Blog';
$username = 'boniface';
$password = 'boniface';

$dsn = "mysql:host=$host;port=$port;dbname=$dbName";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    // echo 'Connected Successfully';
} catch (PDOException $e) {
    echo 'Database Connection Failed: ' . $e->getMessage();
}
