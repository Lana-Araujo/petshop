<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PET SHOP CADASTRO</title>
</head>
<body>
<div class="content">
    <h1>Cadastro de PETSHOP</h1>
        <form action="cadastro_petshop.php" method="POST" class="formulario">
        <label for="tipoanimal">Tipo do animal:</label>
        <select name="tipoanimal" id="">
                <option value="Cao">Cão</option>
                <option value="gato">Gato</option>
                <option value="tartaruga">Tartaruga</option>
                <option value="passaro">Pássaro</option>
            </select>
            <label for="nome">Nome do seu animal:</label>
            <input type="text" name="nome" id="" placeholder="Digite o nome do animal">
            <label for="raca">Raça do seu animal:</label>
            <input type="text" name="raca" id="" placeholder="Digite a raça do seu animal">
            <input type="submit" value="Cadastrar" class="btn">
        </form>
        <button class="btn-voltar"><a href="lista_pacientes.php">Lista de Pacientes</a></button>
    </div>
    
</body>
</html>