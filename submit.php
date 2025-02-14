<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];

    $stmt = $pdo->prepare("INSERT INTO posts (title, content) VALUES (:title, :content)");
    $stmt->execute([
        ":title" => $title,
        ":content" => $content
    ]);

    header("Location: index.php");
    exit();
}
?>
