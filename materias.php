<?php
include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intelectus | Matérias e Exercícios</title>
    <link rel="stylesheet" href="css/style.css">
    <link id="theme-link" rel="stylesheet" href="theme-light.css">
</head>
<body>
    <header class="cabecalho">
        <h1> Intelectus</h1>
        <p class="subtitulo">Aprenda no seu ritmo</p>
    </header>
    <nav>
        <a href="home.php">Home</a> |
        <strong>Matérias</strong> |
        <a href="dicas.php">Dicas</a> |
        <a href="suporte.php">Suporte</a> |
        <a href="equipe.php">Equipe</a>
    </nav>
    <main id="conteudo-principal">
        <button id="toggle-tema" type="button" aria-label="Alternar tema">Tema Escuro</button>
        <section id="catalogo">
            <h2>Catálogo de Matérias</h2>
            <p class="destaque">Veja alguns exemplos de sites que facilitarão seus estudos:</p>

            <a href="nova_materia.php" class="botao-principal">Incluir nova matéria</a>

            <table>
                <thead>
                    <tr>
                        <th>Imagem</th>
                        <th>Matéria</th>
                        <th>Nível</th>
                        <th>Carga Horária</th>
                        <th>Link Externo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT * FROM materias";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($materia = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td><img src='{$materia['imagem']}' style='max-width:100px;'></td>";
                        echo "<td>{$materia['titulo']}</td>";
                        echo "<td>{$materia['nivel']}</td>";
                        echo "<td>{$materia['carga_horaria']}</td>";
                        echo "<td><a href='{$materia['link']}' target='_blank'>Abrir</a></td>";
                        echo "<td>
                                <a href='editar_materia.php?id={$materia['id']}' class='botao-principal'>Editar</a>
                                <a href='delete_materia.php?id={$materia['id']}' class='botao-principal botao-delete' onclick=\"return confirm('Tem certeza que quer deletar esta matéria?')\">Deletar</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Nenhuma matéria cadastrada.</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p><strong>Intelectus</strong> é uma palavra em Latim que significa discernimento, compreensão, entendimento e percepção.
            É a raiz de termos como "<em>intelecto</em>" e "<em>inteligência</em>" e representa a faculdade de
            compreender, de conceber e de relacionar ideias, sendo um conceito fundamental na filosofia, especialmente
            na escolástica medieval.</p>
        <p>© Intelectus — 2025 Site de Estudos (Projeto Fictício para Trabalho Acadêmico de Desenvolvimento Web em
                HTML5, CSS, JavaScript e PHP)</p>
    </footer>

<script src="js/tema.js" defer></script>
</body>
</html>
