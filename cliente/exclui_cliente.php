<?php
include '../config.php';

$cliente_id = $_GET["cliente_id"];

$sql = "DELETE FROM cliente WHERE id=$cliente_id";

if ($mysqli->query($sql) === TRUE) {
    header("Location: consulta_cliente.php");
} else {
    echo "Erro ao excluir o cliente: " . $mysqli->error;
}
?>
