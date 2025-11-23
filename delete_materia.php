<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM materias WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>
                alert('Matéria deletada com sucesso!');
                window.location.href = 'materias.php';
              </script>";
        exit;
    } else {
        echo "<script>
                alert('Erro ao deletar matéria: " . $stmt->error . "');
                window.location.href = 'materias.php';
              </script>";
        exit;
    }

} else {
    echo "<script>
            alert('ID da matéria não informado!');
            window.location.href = 'materias.php';
          </script>";
    exit;
}
?>