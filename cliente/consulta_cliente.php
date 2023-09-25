<?php
include '../conexao.php';

$sql = "SELECT * FROM cliente
        INNER JOIN animal ON cliente_cpf = fk_cliente_cpf"
$resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Consulta de Clientes</title>
</head>
<body>
    <h1>Consulta de Clientes</h1>
    <table>
        <tr>
            <th>CPF Cliente</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Excluir</th>
        </tr>
<?php
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["cliente_cpf"] . "</td>";
        echo "<td>" . $row["cliente_nome"] . "</td>";
        echo "<td>" . $row["cliente_endereco"] . "</td>";
        echo "<td><a href='exclui_cliente.php id=" . $row["animal_cod"] . "'>Excluir</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>Nenhum cliente cadastrado.</td></tr>";
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