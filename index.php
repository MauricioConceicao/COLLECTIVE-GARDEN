<!DOCTYPE html>
  
  <html lang="pt-BR">
  
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style-login.css">
  </head>

  <body>

      <center><img class="logo" src="logosemfundo.png" alt="Seja Bem-Vindo, faça login para continuar.">
      <h1>Bem-Vindo, faça login para continuar.</h1></center>
    
      <div class="login-page">
          <div class="form">
            
            <form class="login-form" action="testeLogin.php" method = "POST">
              <input type="text" placeholder="e-mail" name='email'/>
              <input type="password" placeholder="password" name='password'/>
              <input type="submit" name="submit" value= "enviar">
              <p class="message">Não é registrado? <a href="telaCadastro.php">Crie sua conta</a></p>
            </form>
          </div>
        </div>

  </body>
  
</html>