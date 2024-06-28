<?php
$dbHost = 'LocalHost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'collective_garden';

// Connect to database
$conexao = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if (!$conexao) {
    die("Erro ao conectar-se ao banco de dados: ". mysqli_connect_error());
}

// Create table cadastro_usuario
$sql = "CREATE TABLE IF NOT EXISTS cadastro_usuario (
    id INT AUTO_INCREMENT,
    nome VARCHAR(50),
    sobrenome VARCHAR(50),
    email VARCHAR(100),
    senha VARCHAR(255),
    PRIMARY KEY (id)
)";
mysqli_query($conexao, $sql);

// Check if table was created successfully
if (mysqli_errno($conexao)) {
    echo "Erro ao criar tabela cadastro_usuario: ". mysqli_error($conexao);
} else {
   
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmapwd = $_POST["confirmapwd"];

    if ($password!= $confirmapwd) {
        echo "As senhas não coincidem.";
        exit;
    }

    // Insert data into database
    $sql = "INSERT INTO cadastro_usuario (nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$password')";
    $result = mysqli_query($conexao, $sql);

    if (!$result) {
        die("Erro ao inserir dados no banco de dados: ". mysqli_error($conexao));
    }

    // Redirect to index.php
    header("Location: index.php");
    exit;
}

mysqli_close($conexao);
?>

<!-- telaCadastro.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_cadastro.css">
</head>
<body>
    <style>
    .splash-screen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
        background: linear-gradient(to bottom, #34C759, #000000);
    }

    .splash-screen-logo {
        width: 200px;
        height: 200px;
    }

    .splash-screen-loading {
        font-size: 24px;
        color: white;
    }
    </style>

    <div class="splash-screen">
    <img src="logosemfundo.png" alt="Logo" class="splash-screen-logo">
    <p class="splash-screen-loading">Carregando...</p>
    </div>

    <!-- JavaScript to hide the splash screen after a delay -->
    <script>
    setTimeout(function() {
        document.querySelector('.splash-screen').style.display = 'none';
    }, 3000); // Hide the splash screen after 3 seconds
    </script>

    <!-- Your main content here -->
    <div class="main-content">
    <!-- Your HTML content here -->
    </div>

    <audio autoplay>
        <source src="musica.mp3" type="audio/mp3">
        Seu navegador não suporta o elemento de áudio.
    </audio>

    <div class="container">
        <center>
            <div class="formulario_cadastro_usuario">
                <img class="logo" src="logosemfundo.png" alt="Logo" style="width: 300px; height: 300px; margin: 20px auto;">
                <div class="form-main">
                    <h1 style="font-size: 24px; color: #fff; margin-bottom: 20px;">Faça seu cadastro!</h1>
                    <form action="telaCadastro.php" method="POST" onsubmit="return validatePasswords()">
                        <label class="txt-form" for="nome">Nome Completo:</label>
                        <input type="text" id="nome" name="nome" required placeholder="Ex: João">
                        <label class="txt-form" for="sobrenome">Sobrenome:</label>
                        <input type="text" id="sobrenome" name="sobrenome" required placeholder="Ex: Silva">
                        <label class="txt-form" for="email">E-mail:</label>
                        <input type="email" id="email" name="email" required placeholder="Ex: joao.silva@example.com">
                        <label class="txt-form" for="senha">Senha:</label>
                        <input type="password" id="senha" name="password" required placeholder="Digite sua senha">
                        <label class="txt-form" for="confirma_senha">Confirmar Senha:</label>
                        <input type="password" id="confirma_senha" name="confirmapwd" required placeholder="Digite novamente sua senha" onchange="validatePasswords()">
                        <input type="submit" name="submit" id="submit" value="Cadastrar" style="background: #289c04; color: #fff; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer;">
                        
                    </form>
                    <form action="index.php" method="GET">
                        <button action="index.php" method="GET" type="submit" style="background: #289c04; color: #fff; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer;">Já Possuo</button>
                    </form>
                </div>
            </div>
        </center>
    </div>
    <script>
        function validatePasswords() {
            var pwd = document.getElementById("senha").value;
            var cpwd = document.getElementById("confirma_senha").value;
  
            if (pwd != cpwd) {
                alert("As senhas não coincidem.");
                return false;
            }
  
            return true;
        }
    </script>
</body>
</html>