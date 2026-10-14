<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) die("Faça login para seguir usuários.");

$action = $_GET['action'] ?? '';
$target_id = (int)($_GET['id'] ?? 0);
$user_id = $_SESSION['user_id'];

if ($target_id <= 0) die("Usuário inválido.");
if ($target_id === $user_id) die("Você não pode se seguir.");

$stmt = null;

if ($action === 'follow' && $target_id > 0) {
    $stmt = $pdo->prepare("INSERT IGNORE INTO follows (follower_id, following_id) VALUES (?, ?)");
    $stmt->execute([$user_id, $target_id]);
} elseif ($action === 'unfollow' && $target_id > 0) {
    $stmt = $pdo->prepare("DELETE FROM follows WHERE follower_id = ? AND following_id = ?");
    $stmt->execute([$user_id, $target_id]);
}

header("Location: users_site.php");
exit;