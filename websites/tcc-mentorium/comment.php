<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    die("Faça login para comentar.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post_id = (int)($_POST['post_id'] ?? 0);
    $content = trim($_POST['content'] ?? '');

    if ($post_id > 0 && $content !== '') {
        // Verifica se o post existe
        $stmt = $pdo->prepare("SELECT id FROM posts WHERE id = ?");
        $stmt->execute([$post_id]);
        if ($stmt->fetch()) {
            // Insere o comentário
            $stmt = $pdo->prepare("INSERT INTO comments (post_id, user_id, content) VALUES (?, ?, ?)");
            $stmt->execute([$post_id, $_SESSION['user_id'], $content]);
        }
    }
}

// Redireciona de volta ao feed
header("Location: feed_site.php");
exit;