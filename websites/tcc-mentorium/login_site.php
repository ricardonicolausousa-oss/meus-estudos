<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username !== '' && $password !== '') {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            // Define dados da sessão
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['id'];

            header("Location: /mentorium/feed_site.php");
            exit;
        } else {
            $error = "Usuário ou senha inválidos.";
        }
    } else {
        $error = "Preencha todos os campos.";
    }
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>MENTORIUM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="assets/css/main.css">
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css">
    </noscript>
  <style>
    /* #Formulário de login (igual ao cadastro) */
.inner form {
    background: inherit; /* sem sombra */
    padding: 1.5rem;
    border-radius: 15px;
    transition: none; /* remove hover transform */
}

/* Inputs */
.inner input[type="text"],
.inner input[type="password"] {
    width: 100%;
    padding: 10px 15px;
    margin-bottom: 10px;
    border-radius: 50px;
    border: 1px solid rgba(255,255,255,0.3);
    background: inherit;
    color: inherit;
    transition: all 0.3s ease;
    outline: none;
}

.inner input[type="text"]:hover,
.inner input[type="password"]:hover,
.inner input[type="text"]:focus,
.inner input[type="password"]:focus {
    border-color: rgba(255,255,255,0.6);
}

/* Botões do formulário */
.inner button,
.inner input[type="submit"] {
    border: 1px solid #2e3141;
    border-radius: 50px;
    padding: 10px 25px;
    cursor: pointer;
    font-weight: 500;
    background: inherit;
    color: inherit;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.inner button:hover,
.inner input[type="submit"]:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    filter: brightness(0.9);
    border-color: #494e6bff;
}

/* Botões adicionais tipo "Registrar" */
.inner button[type="button"] {
    margin-left: 10px;
}

/* #Menu interativo */
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

/* Link de Cadastrar estilizado como botão */
.inner a.register-link {
    display: inline-block;
    text-decoration: none;
    border: 1px solid #2e3141;
    border-radius: 50px;
    padding: 10px 25px;
    color: inherit;
    font-weight: 500;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    margin-top: 10px; /* espaçamento do botão acima */
}

.inner a.register-link:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    filter: brightness(0.9);
    border-color: #494e6bff;
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
                        <h2>MENTORIUM - LOGIN</h2>
                        <p>Ensira suas credenciais abaixo.</p>
                    </div>
                </header>
                <!-- Content -->
                <div class="wrapper">
                    <div class="inner">
                        <h2 class="nao">Login</h2>
                        <form method="post">
                            <input type="text" name="username" placeholder="Usuário" required>
                            <br>
                            <input type="password" name="password" placeholder="Senha" required>
                            <br>
                            <button type="submit">Login</button>
                            <a href="register_site.php" class="register-link" >Cadastrar</a>
                        </form>
                        

                        <?php if (!empty($error)): ?>
                            <p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <!-- Footer -->
            <section id="footer">
                <div class="inner">
                    <h2 class="major">Envie-nos uma mensagem</h2>
                    <p>Nosso time é formado por jovens desenvolvedores, pesquisadores, designers e comunicadores que
                        uniram
                        suas habilidades para criar uma plataforma acessível, empática e eficiente.</p>
                    <p>Acreditamos que todos têm o direito de apernder no seu rítmo e da forma que melhor compreenderem.
                        Por
                        isso, desenvolvemos a Mentorium como uma possível solução para todos os estudantes que ficaram
                        para
                        trás no aprendizado.</p>
                    <p>Caso tenha alguma reclamação, sugestão ou até mesmo um pedido de customização de website,
                        envie-nos
                        uma mensagem:</p>
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