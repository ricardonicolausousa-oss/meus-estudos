<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
	die("Faça login para ver os usuários.");
}

$user_id = $_SESSION['user_id'];

// pegar todos os usuários exceto o logado
$stmt = $pdo->prepare("SELECT id, username FROM users WHERE id != ?");
$stmt->execute([$user_id]);
$users = $stmt->fetchAll();

// pegar quem o usuário segue
$stmt = $pdo->prepare("SELECT following_id FROM follows WHERE follower_id = ?");
$stmt->execute([$user_id]);
$following = $stmt->fetchAll(PDO::FETCH_COLUMN);
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>MENTORIUM</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

	<style>
/* #lista de usuarios */
.user-list {
    list-style: none;
    padding: 0;
    margin: 2rem 0;
}

.user-card {
    background: inherit;
    border-radius: 20px;
    padding: 1rem 1.5rem;
    margin-bottom: 1rem;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: inherit;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.user-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 8px 18px rgba(0,0,0,0.25);
}

.user-card strong {
    font-weight: 600;
    letter-spacing: 0.5px;
}

.user-card a {
    text-decoration: none;
    padding: 0.4rem 1rem;
    border-radius: 50px;
    font-size: 0.9rem;
    border: none;
    background: inherit;
    color: inherit;
    transition: transform 0.25s ease, box-shadow 0.25s ease, filter 0.25s ease;
    cursor: pointer;
    box-shadow: none;
}

.user-card a:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 10px rgba(0,0,0,0.12);
    filter: brightness(0.9);
}

/* #botão enviar mensagem */
input[type="submit"] {
    background: inherit; 
    color: inherit;      
    border-radius: 50px;
    padding: 10px 25px;
    cursor: pointer;
    border: none;
    font-weight: 500;
    transition: transform 0.25s ease, box-shadow 0.25s ease, filter 0.25s ease;
}

input[type="submit"]:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 10px rgba(0,0,0,0.12);
    filter: brightness(0.9);
}

/* #Botão Feed */
a[href="feed_site.php"] {
    display: inline-block;
    padding: 10px 20px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 500;
    transition: transform 0.25s ease, box-shadow 0.25s ease, filter 0.25s ease;
    color: inherit;
    background-color: inherit;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    cursor: pointer;
}

a[href="feed_site.php"]:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.35);
    filter: brightness(0.95);
}

/* #menu interativo */
#menu .links li a {
    display: block;
    padding: 10px 15px;
    border-radius: 6px;
    transition: all 0.25s ease;
    box-shadow: none;
    background-color: inherit;
    color: inherit;
}

#menu .links li a:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 10px rgba(0,0,0,0.12);
    filter: brightness(0.95);
}
</style>



</head>

<body class="is-preload">

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header">
			<h1><a href="index_site.php">MENTORIUM</a></h1>
			<nav>
				<a href="#menu">Menu</a>
			</nav>
		</header>

		<!-- Menu -->
		<nav id="menu">
			<div class="inner">
				<h2>Menu</h2>
				<ul class="links">
					<li><a href="index_site.php">Início</a></li>
					<li><a href="users_site.php">Usuários</a></li>
					<li><a href="post_site.php">Posts</a></li>
					<li><a href="login_site.php">Login</a></li>
					<li><a href="register_site.php">Cadastro</a></li>
				</ul>
				<a href="#" class="close">Close</a>
			</div>
		</nav>

		<!-- Wrapper -->
		<section id="wrapper">
			<header>
				<div class="inner">
					<h2>MENTORIUM</h2>
					<p>Ensino para todos.</p>
				</div>
			</header>

			<!-- Content -->
			<div class="wrapper">
				<div class="inner">
					<h2>Usuários</h2>
					<a href="feed_site.php">Feed</a>

					<ul class="user-list">
						<?php foreach ($users as $u): ?>
							<li class="user-card">
								<strong><?= htmlspecialchars($u['username']) ?></strong>
								<?php if (in_array($u['id'], $following)): ?>
									<a href="follow.php?action=unfollow&id=<?= $u['id'] ?>">Desseguir</a>
								<?php else: ?>
									<a href="follow.php?action=follow&id=<?= $u['id'] ?>">Seguir</a>
								<?php endif; ?>
							</li>
						<?php endforeach; ?>
					</ul>

					<?php if (empty($users)) echo "<p>Nenhum outro usuário encontrado.</p>"; ?>

				</div>
			</div>
		</section>

		<!-- Footer -->
		<section id="footer">
			<div class="inner">
				<h2 class="major">Envie-nos uma mensagem</h2>
				<p>Nosso time é formado por jovens desenvolvedores, pesquisadores, designers e comunicadores...</p>
				<form method="post" action="#">
					<div class="fields">
						<div class="field">
							<label for="name">Nome</label>
							<input type="text" name="name" id="name">
						</div>
						<div class="field">
							<label for="email">Email</label>
							<input type="email" name="email" id="email">
						</div>
						<div class="field">
							<label for="message">Mensagem</label>
							<textarea name="message" id="message" rows="4"></textarea>
						</div>
					</div>
					<ul class="actions">
						<li><input type="submit" value="Enviar mensagem"></li>
					</ul>
				</form>
				<ul class="copyright">
					<li>&copy; Mentorium. All rights reserved.</li>
				</ul>
			</div>
		</section>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

	<script>
	// #efeito suave ao carregar
	document.addEventListener("DOMContentLoaded", function(){
		setTimeout(() => {
			document.body.classList.add('loaded');
		}, 100);
	});
	</script>
</body>
</html>
