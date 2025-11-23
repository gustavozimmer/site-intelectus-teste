<?php
include 'conexao.php';

$sql = "SELECT * FROM materias";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intelectus | Matérias Cadastradas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Intelectus</h1>
        <p class="subtitulo">Gerencie suas matérias cadastradas</p>
    </header>

    <nav>
        <a href="home.php" class="botao-principal">Home</a>
        <a href="materias.php" class="botao-principal">Matérias</a>
        <a href="dicas.php" class="botao-principal">Dicas</a>
        <a href="suporte.php" class="botao-principal">Suporte</a>
        <a href="equipe.php" class="botao-principal">Equipe</a>
    </nav>

    <main id="conteudo-principal">
        <h2>Matérias Cadastradas</h2>
        <a href="nova_materia.php" class="botao-principal">Cadastrar Nova Matéria</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while($materia = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $materia['id']; ?></td>
                    <td><?= htmlspecialchars($materia['titulo']); ?></td>
                    <td><?= htmlspecialchars($materia['descricao']); ?></td>
                    <td>
                        <a href="editar_materia.php?id=<?= $materia['id']; ?>" class="botao-principal">Editar</a>
                        <a href="delete_materia.php?id=<?= $materia['id']; ?>" class="botao-principal botao-delete" onclick="return confirm('Tem certeza que quer deletar esta matéria?')">Deletar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p><strong>Intelectus</strong> — 2025 Site de Estudos</p>
    </footer>

    <script src="js/tema.js" defer></script>
</body>
</html>
