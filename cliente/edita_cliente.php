<?php
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $cliente_id = $_POST["cliente_id"];

    $sql = "UPDATE cliente SET nome='$nome', endereco='$endereco' WHERE id=$cliente_id";

    if ($mysqli->query($sql) === TRUE) {
        header("Location: consulta_cliente.php");
    } else {
        echo "Erro ao atualizar o cliente: " . $mysqli->error;
    }
}

$cliente_id = $_GET["cliente_id"];
$sql = "SELECT nome, endereco FROM cliente WHERE id=$cliente_id";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>
    <form method="post">
        <input type="hidden" name="cliente_id" value="<?php echo $cliente_id; ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $row["nome"]; ?>"><br>
        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" value="<?php echo $row["endereco"]; ?>"><br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
