<?php
include 'conexao.php';

if(isset($_POST['enviar'])){
    $titulo = $_POST['titulo'];
    $nivel = $_POST['nivel'];
    $carga_horaria = $_POST['carga_horaria'];
    $imagem = $_POST['imagem'];
    $link = $_POST['link'];

    $stmt = $conn->prepare("INSERT INTO materias (titulo, nivel, carga_horaria, imagem, link) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $titulo, $nivel, $carga_horaria, $imagem, $link);

    if($stmt->execute()){
        echo "<script>
                alert('Matéria cadastrada com sucesso!');
                window.location.href = 'materias.php';
              </script>";
        exit;
    } else {
        echo "<script>
                alert('Erro ao cadastrar matéria: " . $stmt->error . "');
                window.location.href = 'nova_materia.php';
              </script>";
        exit;
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nova Matéria</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Adicionar Nova Matéria</h2>

<form method="POST" action="nova_materia.php">

    Título: <br>
    <input type="text" name="titulo" required><br>

    Nível: <br>
    <input type="text" name="nivel" required><br>

    Carga Horária: <br>
    <input type="text" name="carga_horaria" required><br>

    Imagem (URL ou caminho): <br>
    <input type="text" name="imagem" required><br>

    Link Externo: <br>
    <input type="text" name="link"><br>

    <button type="submit" name="enviar">Adicionar Matéria</button>

</form>

</body>
</html>
