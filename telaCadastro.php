<?php

 if(isset($_POST['submit']))
    {
        //print_r($_POST['nome']);
        //print_r('<br>');
        //print_r($_POST['sobrenome']);
        //print_r('<br>');
        //print_r($_POST['email']);
        //print_r('<br>');
        //print_r($_POST['password']);
        //print_r('<br>');
        //print_r($_POST['confirmapwd']);

        include_once('config.php');


        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmapwd = $_POST['confirmapwd'];

        $result = mysqli_query($conexao, "INSERT INTO cadastro_usuario(nome,sobrenome,email,senha) VALUES('$nome','$sobrenome','$email','$password')");
        header('location: index.php');
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_cadastro.css">
    <link rel="stylesheet" href="script.js">
</head>
<body>
    <center>
        <h1>Faça seu cadastro!</h1>
        <div class="formulario_cadastro_usuario">
            <img class="logo" src="logosemfundo.png">
            <div class="form-main">
                <form action="telaCadastro.php" method="POST">
                    <label class="txt-form" for="fname">Nome:</label>
                    <input type="text" id="fname" name="nome" required>
                    <label class="txt-form" for="lname">Sobrenome:</label>
                    <input type="text" id="lname" name="sobrenome" required>
                    <label class="txt-form" for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label class="txt-form" for="pwd">Senha:</label>
                    <input type="password" id="pwd" name="password" required>
                    <label class="txt-form" for="cpwd">Confirmar senha:</label>
                    <input type="password" id="cpwd" name="confirmapwd" required onchange="validatePasswords()">

            
                    <input type="submit" name="submit" id="submit">
                
                </form>
                <form action = "index.php" method="GET">
                    <button type="submit">Já Possuo</form>
                </form>
            </div>
        </div>
        <br>
        <br>
        <br>
    </center>
    <script>
        function validatePasswords() {
            var pwd = document.getElementById("pwd").value;
            var cpwd = document.getElementById("cpwd").value;
  
            if (pwd != cpwd) {
                alert("As senhas não coincidem.");
                return false;
            }
  
            return true;
        }
    </script>
</body>
</html>