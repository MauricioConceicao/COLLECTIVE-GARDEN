<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Estilo do menu lateral */
        body {
       
        background-size: 100% 100vh;
        height: 100vh;
        margin: 0;
        display: block;
        background: linear-gradient(to bottom, #34C759, #000000);
        }

        nav.menu-lateral{
            width: 40px;
            height: 100%;
            background-color: #202020;
            box-shadow: 3px 0 0 green;
            position: fixed;
            top: 0;
            left: 0;
            overflow: hidden;
        }
       .btn-expandir{
            width: 100%;
            padding: 10px;
            visibility: hidden;
        }
       .btn-expandir > i{
            color: white;
            font-size: 24px;
            cursor:pointer;
        }
        ul{
            height: 100%;
            list-style-type: none;
            padding-left: 10px;
            margin: 0;
        }
        ul li.item-menu a{
            color: white;
            text-decoration: none;
            font-size: 20px;
            padding: 5px 1%;
            display: flex;
            margin-bottom: 10px;
            line-height: 40px;
        }
        ul li.item-menu a.txt-link{
            margin-left: 15px;
        }
        ul li.item-menu:hover{
            background: #008000;
        }
        ul li.item-menu a.icon > i{
            margin-left: 10px;
            font-size: 30px;
        }

        /* Estilo da página wiki */
        .wiki-page {
        margin-left: 40px;
        padding: 20px;
        height: 100vh;
        display: flex; /* Add this line */
        flex-wrap: wrap; /* Add this line */
        justify-content: center; /* Add this line */
        }
       .fruta{
        margin: 20px;
        background-color: #FFFFFF;
        display: inline-block;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 20px;
        width: 25vw;
        height: 60vh;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        .fruta .img_wiki_fruta {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0;
        }
        

        
       
    </style>
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

            <div class="splash-screen"><center>
            <img src="logosemfundo.png" alt="Logo" class="splash-screen-logo">
            <p class="splash-screen-loading">Carregando...</p>
            </div></center>

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

    <!-- Menu lateral -->
    <nav class="menu-lateral">

            <div class="btn-expandir">

                <i class="bi bi-list"></i>
           
            </div>
           

            <ul>

                <li class="item-menu">

                    <a href="home.php">
                        <span class="icon"><i class="bi bi-house-door"></i></span>
                        <span class="txt-link">HOME</span>
                    </a>

                </li>

                <li class="item-menu">

                    <a href="cadastro_planta.php">
                        <span class="icon"><i class="bi bi-pencil"></i></span>
                        <span class="txt-link">CADASTRAR PLANTAS</span>
                    </a>

                </li>

                <li class="item-menu">

                    <a href="wiki.php">
                        <span class="icon"><i class="bi bi-search"></i></i></span>
                        <span class="txt-link">GARDENPÉDIA</span>
                    </a>

                </li>

                <li class="item-menu">

                    <a href="suporte.php">
                        <span class="icon"><i class="bi bi-telephone"></i></i></span>
                        <span class="txt-link">SUPORTE</span>
                    </a>

                </li>

                <li class="item-menu">

                    <a href="logoff.php">
                        <span class="icon"><i class="bi bi-box-arrow-right"></i></i></span>
                        <span class="txt-link">SAIR</span>
                    </a>

                </li>
            </ul>
        
    </nav>

    <!-- Página wiki -->
    <div class="wiki-page">
        <div class="fruta" alt="Ananas comosus">
            <img class="img_wiki_fruta" src="./imagensPlantas/Carica papaya.avif" alt="Carica papaya">
            <h2>Mamão <br>(<i>Carica papaya</i>)</h2>
            <p>O mamão é uma fruta tropical rica em vitamina C e potássio. É comummente consumida fresca ou em forma de suco.</p>
        </div>
        <div class="fruta" alt="Ananas comosus">
            <img class="img_wiki_fruta" src="./imagensPlantas/Musaacuminata.jpeg" alt="Musa acuminata">
            <h2>Banana <br>(<i>Musa acuminata</i>)</h2>
            <p>A banana é uma fruta rica em carboidratos e potássio. É comummente consumida fresca ou em forma de smoothie.</p>
        </div>
        <div class="fruta" alt="Ananas comosus">
            <img class="img_wiki_fruta" src="./imagensPlantas/Ananascomosus.jpeg" alt="Ananas comosus">
            <h2>Abacaxi <br>(<i>Ananas comosus</i>)</h2>
            <p>O abacaxi é uma fruta tropical rica em vitamina C e fibras. É comummente consumida fresca ou em forma de suco.</p>
        </div>
    </div>
    

</body>
</html>