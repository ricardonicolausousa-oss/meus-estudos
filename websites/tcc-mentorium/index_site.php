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
/* CARDS - Seção "O que oferecemos" */
.features article {
    background: inherit; 
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    padding: 20px;
    text-align: center;
    color: inherit; 
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.features article:hover {
    transform: translateY(-6px);
    box-shadow: 0 8px 15px rgba(0,0,0,0.15);
}


.features article .image img {
    border-radius: 6px;
    transition: transform 0.3s ease;
}

.features article:hover .image img {
    transform: scale(1.03);
}

/*BOTÕES - Cards e seção "Comece conosco"*/
.features article a.special,
section button {
    background-color: inherit; 
    color: inherit; 
    padding: 10px 20px;
    border-radius: 50px;
    text-decoration: none;
    display: inline-block;
    transition: all 0.25s ease;
    border: none;
    cursor: pointer;
    font-weight: 500;
    outline: none;
    position: relative;
}


.features article a.special span,
section button span {
    pointer-events: none;
}

/* Hover dos botões */
.features article a.special:hover,
section button:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 10px rgba(0,0,0,0.12);
}

/* Botão "Enviar mensagem" */
input[type="submit"] {
    background-color: inherit; /* mantém cor original do site */
    color: inherit; /* mantém cor do texto */
    border-radius: 50px;
    padding: 10px 25px;
    cursor: pointer;
    border: none;
    font-weight: 500;
    transition: transform 0.25s ease, box-shadow 0.25s ease, background-color 0.25s ease, color 0.25s ease;
}

input[type="submit"]:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 10px rgba(0,0,0,0.12);
}

/*MENU INTERATIVO */
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
                    <h3 class="major">Quem somos?</h3>
                    <p>O ensino, até mesmo em escolas particulares, não realmente ensina da melhor forma todos os alunos da instituição. Há diversas dificuldades que os mesmos sofrem com, chamado os déficits de aprendizagem. O famoso Transtorno de Déficit de Atenção e Hiperatividade está entre eles. Alunos com isso, dislexia, discalculia e entre outros ficam inevitavelmente para trás quando comparado ao resto dos colegas, e nosso objetivo é fornecer um ambiente seguro para conversar sobre os seus problemas e estudar em grupo com pessoas similares.</p>
                    <p>O nosso site foi feito aos alunos que não conseguiram acompanhar o raciocício dos professores - aos alunos que pensam de forma diferente. Com a nossa ajuda, estes alunos, com deficiências ou não, tornam-se capazes de encontrar pessoas similares e se ajudarem a entender o conteúdo escolar da melhor forma.</p>

                    <h3 class="major">O que oferecemos?</h3>
                    <p>Nosso site oferece múltiplas ferramentas para melhor aprender tanto em sala de aula, quanto fora com alunos que localizam-se a quilómetros de distância.</p>

                    <section class="features">
                        <article>
                            <a href="#" class="image">
                                <img src="images/pic04.jpg" alt="">
                            </a>
                            <h3 class="major">Fórum</h3>
                            <p>Nossa plataforma conecta estudantes com dificuldades similares, permitindo que compartilhem diferentes métodos de ensino e aprendam de forma personalizada.</p>
                            <p>Isso transforma informações disperdiçadas em aprendizado útil, respeitando diferentes estilos de aprendizagem.</p>
                            <a href="#" class="special">Saiba mais</a>
                        </article>
                        <article>
                            <a href="#" class="image">
                                <img src="images/pic05.jpg" alt="">
                            </a>
                            <h3 class="major">Salas de aula on-line</h3>
                            <p>Salas de aula, interativas, instanâneas e compartilháveis com o resto dos colegas de classe.</p>
                            <p>Todos os alunos da sala de aula terão acesso a datas de calendário compartilhadas, anexação de arquivos a matérias específicas da grade curricular do curso e muito mais.</p>
                            <a href="#" class="special">Saiba mais</a>
                        </article>
                        <article>
                            <a href="#" class="image">
                                <img src="images/pic05.jpg" alt="">
                            </a>
                            <h3 class="major">Suporte personalizado</h3>
                            <p>Oferecemos designs personalizados para usuários com algum déficit de aprendizagem, como TDAH. Basta entrar em contato conosco e realizar o seu pedido de modificação.</p>
                            <a href="#" class="special">Saiba mais</a>
                        </article>
                    </section>

                    <h3 class="major">Por quê?</h3>
                    <p>Realizamos uma pesquisa com centenas de pessoas em relação ao aprendizado escolar, confira abaixo:</p>

                    <!-- Porcentagens animadas -->
                    <div class="porcentagens">
                        <p><b class="contador" data-target="83">0</b>% dos entrevistados não aprendem apenas com o material didático.</p>
                        <p><b class="contador" data-target="67">0</b>% pensam que o sistema atual de ensino é ineficiente.</p>
                        <p><b class="contador" data-target="84">0</b>% gostariam de ter contato com alunos com dificuldades similares.</p>
                        <p><b class="contador" data-target="86">0</b>% não aprendem apenas com o método de ensino que o professor fornece.</p>
                        <p><b class="contador" data-target="75">0</b>% dos alunos sofrem com saúde mental por conta dos estudos.</p>
                    </div>

                    <!-- Gráfico de pizza compacto -->
                    <div style="width: 250px; height: 250px; margin: 0 auto;">
                        <canvas id="graficoPorcentagem" width="250" height="250"></canvas>
                    </div>

                    <p>Esses dados reforçam a urgência e a relevância do Projeto Mentorium, que busca oferecer um aprendizado mais inclusivo, acessível, amigável e saudável a todos os estudantes.</p>

                    <section>
                        <h3 class="major">Comece conosco</h3>
                        <p>Nosso time é formado por jovens desenvolvedores, pesquisadores, designers e comunicadores que uniram suas habilidades para criar uma plataforma acessível, empática e eficiente.</p>
                        <p>Acreditamos que todos têm o direito de apernder no seu rítmo e da forma que melhor compreenderem. Por isso, desenvolvemos a Mentorium como uma possível solução para todos os estudantes que ficaram para trás no aprendizado.</p>
                        <button onclick="btn_cadastro()"><span>Comece conosco</span></button>
                        <button onclick="btn_login()"><span>Já tem uma conta? Clique aqui</span></button>
                    </section>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <section id="footer">
            <div class="inner">
                <h2 class="major">Envie-nos uma mensagem</h2>
                <p>Nosso time é formado por jovens desenvolvedores, pesquisadores, designers e comunicadores que uniram suas habilidades para criar uma plataforma acessível, empática e eficiente.</p>
                <p>Acreditamos que todos têm o direito de apernder no seu rítmo e da forma que melhor compreenderem. Por isso, desenvolvemos a Mentorium como uma possível solução para todos os estudantes que ficaram para trás no aprendizado.</p>
                <p>Caso tenha alguma reclamação, sugestão ou até mesmo um pedido de customização de website, envie-nos uma mensagem:</p>
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

    <!-- Chart.js via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Script do gráfico de pizza e contadores -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // GRÁFICO DE PIZZA
        const ctx = document.getElementById('graficoPorcentagem').getContext('2d');
        const data = {
            labels: ['Não aprendem apenas com material didático', 'Sistema de ensino ineficiente', 'Gostariam de contato com alunos similares', 'Não aprendem só com professor', 'Sofrem com saúde mental'],
            datasets: [{
                data: [83, 67, 84, 86, 75],
                backgroundColor: ['#0044ffff','#3341ffff','#2331f5ff','#669cffff','#8088ffff'],
                borderWidth: 0
            }]
        };
        const config = {
            type: 'pie',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { position: 'bottom' } },
                animation: { animateRotate: true, duration: 1500 }
            },
        };
        const grafico = new Chart(ctx, config);

        // CONTADORES
        const contadores = document.querySelectorAll('.contador');
        let animated = false;
        function animarContador(element, target){
            let current = 0;
            const step = target / 100;
            const interval = setInterval(() => {
                current += step;
                if(current >= target){
                    current = target;
                    clearInterval(interval);
                }
                element.textContent = Math.floor(current);
            }, 20);
        }

        // Scroll trigger para gráfico e contadores
        window.addEventListener('scroll', function() {
            const section = ctx.canvas.parentElement;
            const rect = section.getBoundingClientRect();
            if (!animated && rect.top < window.innerHeight) {
                grafico.reset();
                grafico.update();
                contadores.forEach(cont => {
                    animarContador(cont, parseInt(cont.getAttribute('data-target')));
                });
                animated = true;
            }
        });
    });
    </script>
</body>
</html>
