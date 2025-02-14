<?php
$dsn = 'mysql:host=localhost;dbname=blogg;charset=utf8';
$username = 'bloggbruker';
$password = '123456789';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Tilkoblingsfeil: " . $e->getMessage();
}
?>
