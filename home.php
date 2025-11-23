<?php
// Nenhum PHP necessário aqui ainda, mas podemos incluir depois se precisar
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intelectus</title>
    <link rel="stylesheet" href="css/style.css">
    <link id="theme-link" rel="stylesheet" href="theme-light.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Bem-vindo ao Intelectus</h1>
        <p class="subtitulo">Organize seus estudos, pratique exercícios e aprenda de forma simples!</p>
        <p class="subtitulo"><em>Estude no seu ritmo, revise e evolua todos os dias.</em></p>
    </header>

    <nav>
        <a href="home.php" >Home</a>
        <a href="materias.php" >Matérias</a>
        <a href="dicas.php" >Dicas</a>
        <a href="suporte.php" >Suporte</a>
        <a href="equipe.php" >Equipe</a>
    </nav>

    <main id="conteudo-principal">
        <button id="toggle-tema" type="button" aria-label="Alternar tema">Tema Escuro</button>

        <form action="#" method="post">
            <label for="id_nome">Nome do Estudante:</label>
            <input type="text" id="id_nome" name="nome" required>
            <button type="submit" class="botao-principal">Entrar</button>
        </form>

        <section id="sobre">
            <h2>Sobre o Intelectus</h2>
            <p class="destaque">
                O <strong>Intelectus</strong> nasceu para tornar o <strong>aprendizado</strong> mais simples e divertido! Aqui você encontra
                <strong>aulas</strong> e <strong>exercícios práticos</strong> que ajudam a <strong>fixar o conteúdo</strong>. Nosso objetivo é ajudar
                você a <strong>aprender de forma eficiente</strong>, sem complicação e sem perder tempo. Cada seção do site foi criada
                para que você possa <strong>estudar no seu ritmo</strong> e acompanhar sua <strong>evolução</strong> facilmente.
            </p>
        </section>
    </main>

    <footer>
        <p><strong>Intelectus</strong> é uma palavra em Latim que significa discernimento, compreensão, entendimento e percepção.
        É a raiz de termos como "<em>intelecto</em>" e "<em>inteligência</em>" e representa a faculdade de compreender e relacionar ideias.</p>
        <p>© Intelectus — 2025 Site de Estudos (Projeto Fictício para Trabalho Acadêmico de Desenvolvimento Web em HTML5, CSS, JavaScript e PHP)</p>
    </footer>

    <script src="js/tema.js" defer></script>
</body>
</html>
