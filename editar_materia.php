<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "intelectus";

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if (isset($_POST['editar'])) {

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $nivel = $_POST['nivel'];
    $carga_horaria = $_POST['carga_horaria'];
    $imagem = $_POST['imagem'];
    $link = $_POST['link'];

    $stmt = $conn->prepare("UPDATE materias SET titulo=?, nivel=?, carga_horaria=?, imagem=?, link=? WHERE id=?");
    $stmt->bind_param("sssssi", $titulo, $nivel, $carga_horaria, $imagem, $link, $id);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    echo "<script>
            alert('Alterações salvas com sucesso!');
            window.location.href = 'materias.php';
          </script>";
    exit;
}



if (!isset($_GET['id'])) {
    die("ID da matéria não fornecido.");
}

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM materias WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
$materia = $resultado->fetch_assoc();
$stmt->close();

$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Matéria</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $materia['id']; ?>">

        <label>Título:</label>
        <input type="text" name="titulo" value="<?php echo $materia['titulo']; ?>" required><br>

        <label>Nível:</label>
        <input type="text" name="nivel" value="<?php echo $materia['nivel']; ?>" required><br>

        <label>Carga Horária:</label>
        <input type="text" name="carga_horaria" value="<?php echo $materia['carga_horaria']; ?>" required><br>

        <label>Imagem:</label>
        <input type="text" name="imagem" value="<?php echo $materia['imagem']; ?>"><br>

        <label>Link:</label>
        <input type="text" name="link" value="<?php echo $materia['link']; ?>"><br>

        <button type="submit" name="editar">Salvar Alterações</button>
    </form>

</body>
</html>

