<?php
include("config.php");

$sql = "SELECT animais.nome, animais.raca, cliente.nome AS dono
        FROM animais
        INNER JOIN cliente ON animais.cliente_id = cliente.id";

$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Animais</title>
</head>
<body>
    <h1>Consulta de Animais</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Raça</th>
            <th>Dono</th>
        </tr>
        <?php
        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["raca"] . "</td>";
                echo "<td>" . $row["dono"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Nenhum animal cadastrado.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
