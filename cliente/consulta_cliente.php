<?php
include '../conexao.php';

$sql = "SELECT nome, endereco FROM cliente";

$resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Clientes</title>
</head>
<body>
    <h1>Consulta de Clientes</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
        </tr>
        <?php
        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . $row["endereco"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
