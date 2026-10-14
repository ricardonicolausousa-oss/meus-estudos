<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    die("Faça login para curtir.");
}

$post_id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$user_id = $_SESSION['user_id'];

if ($post_id > 0) {
    // Verifica se o post existe
    $stmt = $pdo->prepare("SELECT id FROM posts WHERE id = ?");
    $stmt->execute([$post_id]);
    if ($stmt->fetch()) {
        // Verifica se já curtiu
        $stmt = $pdo->prepare("SELECT id FROM likes WHERE post_id = ? AND user_id = ?");
        $stmt->execute([$post_id, $user_id]);

        if ($stmt->fetch()) {
            // Descurtir
            $stmt = $pdo->prepare("DELETE FROM likes WHERE post_id = ? AND user_id = ?");
            $stmt->execute([$post_id, $user_id]);
        } else {
            // Curtir
            $stmt = $pdo->prepare("INSERT INTO likes (post_id, user_id) VALUES (?, ?)");
            $stmt->execute([$post_id, $user_id]);
        }
    }
}

header("Location: feed_site.php");
exit;