<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página com Fundo Bonito e Imagens</title>
    <style>
        /* Estilização do corpo */
        body {
            background-image: url('https://png.pngtree.com/background/20210710/original/pngtree-cartoon-pet-footprints-simple-gray-banner-picture-image_1053918.jpg'); /* URL da sua imagem de fundo */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333; /* Cor do texto */
        }

        /* Estilização do cabeçalho */
        header {
            background-color: #f8f8f8; /* Cor de fundo do cabeçalho */
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333; /* Cor do texto do cabeçalho */
        }

        /* Estilização do conteúdo */
        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Cor de fundo com transparência */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Sombra */
        }

        /* Estilização das imagens */
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 20px auto; /* Espaçamento entre as imagens */
        }
        /* style.css */
/* Estilização para botões */
.button-container {
    text-align: center;
    margin-top: 20px;
}

.button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #0077cc; /* Cor de fundo dos botões */
    color: #fff; /* Cor do texto dos botões */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease; /* Efeito de transição ao passar o mouse */
    margin-right: 10px; /* Espaço entre os botões */
}

.button:hover {
    background-color: #005299; /* Cor de fundo dos botões ao passar o mouse */
}

        
    </style>
</head>
<body>
    <header>
        <h1>Página com Fundo Bonito e Imagens</h1>
    </header>
    <div class="content">
        <p>Bem vindo ao nosso PETSHOP!</p>
        <div class="button-container">
        <a href="agendamento/consulta_agenda.php" class="button">Consultar Agenda</a>
        <a href="animal/consulta_animal.php" class="button">Consultar Animal</a>
        <a href="consulta/consulta_cliente.php" class="button">Consultar Cliente</a>
    </div>
        <img src="https://idec.org.br/sites/default/files/dicasedireitos/como-escolher-petshop.jpg" alt="Imagem 1">
    </div>
</body>
</html>
