<!DOCTYPE html>
  
  <html lang="pt-BR">
  
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style-login.css">
      <style>
        body {
            overflow: hidden;
        }
      </style>
  </head>

  <body>

      <audio autoplay>
        <source src="musica.mp3" type="audio/mp3">
        Seu navegador não suporta o elemento de áudio.
      </audio>

      <center><img class="logo" src="logosemfundo.png">
    
        <div class="login-page">
            <div class="form">
              
              <form class="login-form" action="testeLogin.php" method = "POST">
                <input type="text" placeholder="e-mail" name='email'/>
                <input type="password" placeholder="password" name='password'/>
                <input type="submit" name="submit" value= "enviar" style="background: #289c04;">
                <p class="message">Não é registrado? <a href="telaCadastro.php">Crie sua conta</a></p>
              </form>
            </div>
        </div>
      </center>
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
      <center><img class="logo" src="logosemfundo.png">
      <div class="bv2"><h1>Bem-Vindo <br> Cadastre-se e faça login para continuar.</h1>
        <p class="splash-screen-loading">Carregando...</p></center>
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
  </body>
  
</html>