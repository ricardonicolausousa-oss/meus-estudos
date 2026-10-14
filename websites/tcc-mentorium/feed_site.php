<?php
session_start();
require 'db.php';

$user_id = $_SESSION['user_id'] ?? null;

// Pegar IDs que o usuário segue
$following_ids = [];
if ($user_id) {
	$stmt = $pdo->prepare("SELECT following_id FROM follows WHERE follower_id = ?");
	$stmt->execute([$user_id]);
	$following_ids = $stmt->fetchAll(PDO::FETCH_COLUMN);
}

// Preparar SQL para posts do feed
if ($user_id) {
	// sempre inclui o próprio usuário
	$ids = $following_ids;
	$ids[] = $user_id;

	$placeholders = rtrim(str_repeat('?,', count($ids)), ',');
	$sql = "SELECT posts.*, users.username,
            (SELECT COUNT(*) FROM likes WHERE likes.post_id = posts.id) AS like_count
            FROM posts
            JOIN users ON posts.user_id = users.id
            WHERE posts.user_id IN ($placeholders)
            ORDER BY posts.created_at DESC";
	$stmt = $pdo->prepare($sql);
	$stmt->execute($ids);
	$posts = $stmt->fetchAll();
} else {
	// não logado -> mostra tudo
	$sql = "SELECT posts.*, users.username,
            (SELECT COUNT(*) FROM likes WHERE likes.post_id = posts.id) AS like_count
            FROM posts
            JOIN users ON posts.user_id = users.id
            ORDER BY posts.created_at DESC";
	$posts = $pdo->query($sql)->fetchAll();
}

// Pegar todos os comentários
$commentStmt = $pdo->query("
    SELECT comments.*, users.username
    FROM comments
    JOIN users ON comments.user_id = users.id
    ORDER BY comments.post_id ASC, comments.created_at ASC
");
$allComments = [];
while ($c = $commentStmt->fetch()) {
	$allComments[$c['post_id']][] = $c;
}
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>MENTORIUM</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>

	<style>
/* --- Menu interativo --- */
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

/* --- Posts do feed reativos --- */
.post-box {
    border-radius: 12px;
    padding: 12px;
    margin-bottom: 15px;
    transition: all 0.3s ease;
    cursor: default;
    box-shadow: 0 2px 6px rgba(0,0,0,0.08);
}


/* Comentários e formulário de comentários*/
.comment-form button {
    border-radius: 40px;
    padding: 6px 15px;
    cursor: pointer;
	background-color: black; 
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}
.comment-form button:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 12px rgba(0,0,0,0.15);
    filter: brightness(0.95);
	background-Color: #1c1d27ff;
}

/* Botão enviar mensagem do footer */
input[type="submit"] {
    background: inherit;
    color: inherit;
    border-radius: 50px;
    padding: 10px 25px;
    cursor: pointer;
    border: none;
    font-weight: 500;
    transition: all 0.45s ease;
}
input[type="submit"]:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 10px rgba(0,0,0,0.12);
    filter: brightness(0.9);
}

/* Links de navegação dentro da página (Voltar, Criar Post, Sair) */
.wrapper .inner a {
    display: inline-block;
    margin-right: 10px;
    text-decoration: none;
    border-radius: 50px;
    padding: 8px 15px;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}
.wrapper .inner a:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    filter: brightness(0.9);
}

.comment-box strong {
    color: #000 !important;
}

.ola{ 

	text-align: center;
}

/* Container flex para centralizar apenas os links */
.wrapper .inner .nav-links {
    display: flex;
    justify-content: center; /* centraliza horizontalmente */
    gap: 15px;               /* espaço entre os links */
    margin-bottom: 15px;
}

.wrapper .inner .nav-links a {
    text-decoration: none;
    border-radius: 50px;
    padding: 8px 15px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.wrapper .inner .nav-links a:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    filter: brightness(0.9);
}

/* misericórdia */
.postes {
	color: #000;
}

/* Input de comentário reativo */
.comment-form input[type="text"] {
    padding: 6px 12px;
    border-radius: 20px;
    border: 1px solid #bebebeff; 
    outline: none;
    transition: all 0.45s ease;
    background-color: #e0e0e0ff; 
    cursor: text;
    box-shadow: 0 2px 6px rgba(0,0,0,0.08);
}

.comment-form input[type="text"]:hover,
.comment-form input[type="text"]:focus {
    transform: translateY(-2px);
    box-shadow: 0 5px 12px rgba(0,0,0,0.15);
	border-color: #acacacff
}

.comment-form input[type="text"]::placeholder {
    color: #838383ff !important; /* escuro */
    opacity: 1; 
}

h1,h2 {

    text-align: center;
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
					<h2>MENTORIUM - Feed</h2>
					<p>Ensino para todos.</p>
				</div>
			</header>

			<div class="wrapper">
				<div class="inner">
					<?php if ($user_id): ?>
						<p class="ola">
							Olá, <b> <?= htmlspecialchars($_SESSION['username']) ?> </b> </p>
							<div class="nav-links">
							<a href="/mentorium/logout.php">Sair</a> 
							<a href="/mentorium/post_site.php">Criar Post</a> 
							<a href="/mentorium/users_site.php">Usuários</a>
						</div>
					<?php else: ?>
						<p><a href="/mentorium/login_site.php">Login</a> | <a
								href="/mentorium/register_site.php">Cadastrar</a></p>
					<?php endif; ?>



					<?php foreach ($posts as $post): ?>

						<div class="post-box">
							<h2 class="postes">Posts</h2>
							<div class="comment-box">

								<p>
									<strong><?= htmlspecialchars($post['username']) ?></strong>:
									<?= htmlspecialchars($post['content']) ?>
								</p>
							</div>
							<br>
							<h4>Comentários</h4>
							<?php
							if (!empty($allComments[$post['id']])) {
								foreach ($allComments[$post['id']] as $c): ?>
									<div class="comment-box">
										<strong><?= htmlspecialchars($c['username']) ?></strong>:
										<?= htmlspecialchars($c['content']) ?>
									</div>
								<?php endforeach;
							} else {
								echo "<p>Nenhum comentário ainda.</p>";
							}
							?>
							<br>

							<!-- Formulário de comentário -->
							<?php if ($user_id): ?>
								<form class="comment-form" method="post" action="/mentorium/comment.php">
									<input type="hidden" name="post_id" value="<?= $post['id'] ?>">
									<input type="text" name="content" placeholder="Comentar..." required>
									<br>
									<button type="submit">Enviar</button>
								</form>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
	</div>

	</section>

	<!-- Footer -->
	<section id="footer">
		<div class="inner">
			<h2 class="major">Envie-nos uma mensagem</h2>
			<p>Nosso time é formado por jovens desenvolvedores, pesquisadores, designers e comunicadores que uniram suas
				habilidades para criar uma plataforma acessível, empática e eficiente.</p>
			<p>Acreditamos que todos têm o direito de apernder no seu rítmo e da forma que melhor compreenderem. Por
				isso, desenvolvemos a Mentorium como uma possível solução para todos os estudantes que ficaram para trás
				no aprendizado.</p>
			<p>Caso tenha alguma reclamação, sugestão ou até mesmo um pedido de customização de website, envie-nos uma
				mensagem:</p>
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
					<li>
						<input type="submit" value="Enviar mensagem">
					</li>
				</ul>
			</form>
			<ul class="contact">
				<li class="icon solid fa-home">
					Colégio Clóvis
					<br>
					Rua Sidney 558
					<br>
					Santo André, SP
				</li>
				<li class="icon solid fa-phone">(11) 99191-6161</li>
				<li class="icon solid fa-envelope">
					<a href="#">mentorium@contato.com</a>
				</li>
				<li class="icon brands fa-twitter">
					<a href="#">twitter.com/mentorium</a>
				</li>
				<li class="icon brands fa-facebook-f">
					<a href="#">facebook.com/mentorium</a>
				</li>
				<li class="icon brands fa-instagram">
					<a href="#">instagram.com/mentorium</a>
				</li>
			</ul>
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

</body>

</html>