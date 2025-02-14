<?php
include 'database.php';

$stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC");
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Min Blogg</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<nav>
    <a href="help.html">Trenger du hjelp?</a>
</nav>

    <h1>Min Blogg</h1>
    <form action="submit.php" method="POST">
        <input type="text" name="title" placeholder="Tittel" required>
        <textarea name="content" placeholder="Skriv innhold her..." required></textarea>
        <button type="submit">Publiser</button>
    </form>

    <h2>Innlegg:</h2>
    <?php foreach ($posts as $post): ?>
        <div class="post">
            <h3><?= htmlspecialchars($post['title']); ?></h3>
            <p><?= nl2br(htmlspecialchars($post['content'])); ?></p>
            <small>Publisert: <?= $post['created_at']; ?></small>
            <hr>
        </div>
    <?php endforeach; ?>
</body>
</html>
