<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    die("Faça login.");
}

$user_id = $_SESSION['user_id'];

// Buscar notificações
$stmt = $pdo->prepare("
    SELECT id, content, created_at, read_status
    FROM notifications
    WHERE user_id = ?
    ORDER BY created_at DESC
");
$stmt->execute([$user_id]);
$notifications = $stmt->fetchAll();
?>

<h2>Notificações</h2>
<p><a href="feed_site.php">Voltar ao feed</a></p>

<?php if ($notifications): ?>
    <?php foreach ($notifications as $n): ?>
        <div>
            <?= htmlspecialchars($n['content']) ?>
            (<?= htmlspecialchars($n['created_at']) ?>)
            <?php if (!$n['read_status']): ?>
                <em>[Nova]</em>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>

    <?php
    // Marcar como lidas após exibição
    $pdo->prepare("UPDATE notifications SET read_status = 1 WHERE user_id = ?")->execute([$user_id]);
    ?>

<?php else: ?>
    <p>Nenhuma notificação</p>
<?php endif; ?>