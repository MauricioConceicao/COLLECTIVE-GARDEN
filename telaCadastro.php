<!-- telaCadastro.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_cadastro.css">
</head>
<body>

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
                    <form action="telaCadastro.php" method="POST">
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