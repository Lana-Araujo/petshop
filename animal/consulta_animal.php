<?php
include '../conexao.php';

$sql = "SELECT * FROM animal
        INNER JOIN cliente ON fk_cliente_cpf = cliente_cpf";
$resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Consulta de Animais</title>
</head>
<body>
    <h1>Consulta de Animais</h1>
    <table>
        <tr>
            <th>Número de animais</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Raça</th>
            <th>CPF do Dono</th>
            <th>Excluir</th>
        </tr>
<?php
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["animal_cod"] . "</td>";
        echo "<td>" . $row["animal_tipo"] . "</td>";
        echo "<td>" . $row["animal_nome"] . "</td>";
        echo "<td>" . $row["animal_raca"] . "</td>";
        echo "<td>" . $row["fk_cliente_cpf"] . "</td>";
        echo "<td><a href='exclui_cliente.php id=" . $row["animal_cod"] . "'>Excluir</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>Nenhum animal cadastrado.</td></tr>";
}
?>

    </table>
    <style>
        
h1{
    text-align: center;
}


table {
    width: 100%;
    border-collapse: collapse;
    background-color: #e6f7ff; /* Cor de fundo azul claro */
}

th, td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: left;
}

tr:nth-child(even) {
    background-color: #cce0ff; /* Cor de fundo ainda mais clara para linhas pares */
}

    </style>
</body>
</html>