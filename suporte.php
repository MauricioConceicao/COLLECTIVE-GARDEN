<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>

       body {
       
       background-size: 100% 100vh;
       height: 100vh;
       margin: 0;
       display: block;
       
       }

        /* Estilo do menu lateral */
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

        ul li.item-menu a .txt-link{
        margin-left: 15px;
        }

        ul li.item-menu:hover{
        background: #008000;
        }

        ul li.item-menu a.icon > i{
        margin-left: 10px;
        font-size: 30px;
        }
        ul li.item-menu a{
        transition: 4s;
        }
        nav.menu-lateral:hover{
        width: 300px;
        
        }
        nav.menu-lateral ul {
        list-style-type: none;
        padding-left: 10px;
        margin-bottom: 0;
        }

        /*estilo perfil */
        .container {
            display: flex;
        }

        .left-side {
            width: 40%;
            background-color: #8298f9;
            color: white;
            padding: 20px;
        }

        .right-side {
            margin-left: 40px;
            width: 60%;
            padding: 20px;
        }

         
        h1{
            font-size: 75px;
            margin-top: -10%;
            top: 100%;
            margin-left: 40px;
            color:black;
        } 
        h2, h3 {
            margin-left: 40px;
            color: black;
        }

        .section {
            margin-left: 40px;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        .iconescontato {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
        }

        .iconescontato{
            width: 60px;
        }

        .link {
            color: #8298f9;
            text-decoration: none;
        }

        .link:hover {
            text-decoration: underline;
        }
        .div .left-side .face{
            display: flex;
            justify-content: flex-start;
        }
        .face{
            width: 450px;
            height: auto;
        }
        .container .section .iconescontato{
            height: auto;
            width: auto;
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
    <div class="container">
        <div class="left-side">
            <img class="face" src="./imagensPlantas/face.png" alt="">
            <h1>Maurício Conceição</h1>
            <div class="section">
                <h2>Principais contatos</h2>
                <div class="iconescontato">
                    <a href="https://wa.me/5551994437126?text=Oi%20Mauricio%2C%20sou%20o(a)%20(seu%20nome)%20e%20estou%20com%20um%20problema%20em%20seu%20site.%0APode%20me%20ajudar%3F">
                        <span><i class="bi bi-whatsapp"></i></span>
                    </a>
                    <a href="mauricioconceicao777@gmail.com">
                        <span><i class="bi bi-envelope"></i></span>
                    </a>
                    <a href="https://www.linkedin.com/in/maur%C3%ADcio-saturnino-concei%C3%A7%C3%A3o-60727319b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                        <span><i class="bi bi-linkedin"></i></span>
                    </a>
                    
                </div>
            </div>
            <div class="section">
                <h2>Endereço</h2>
                <p>Rua nove, 6 bloco 89 Santa Rita<br>
                   Guaíba, Rio Grande do Sul, Brasil</p>
            </div>
            <div class="section">
                <h2>Interesses</h2>
                <ul>
                    <li>Linguagens de programação (Java,JS,PyTHON)</li>
                    <li>Projetos pessoais de tecnologia</li>
                    <li>Backand & Frontend</li>
                    <li>Cybersecurity</li>
                    <li>Suporte N1 & N2</li>
                </ul>
            </div>
        </div>
        <div class="right-side">
            <div class="section">
                <h3>RESUMO</h3>
                <p>A caminho da minha formação em Tecnologia da Informação com conhecimentos em linguagens de programação, banco de dados e desenvolvimento web. Habilidade em resolução de problemas e aprendizagem rápida. Busco oportunidades para aplicar meu conhecimento em uma empresa de tecnologia em crescimento.</p>
            </div>
            <div class="section">
                <h3>FORMAÇÃO ACADÊMICA</h3>
                <p>Cursando Técnico em Tecnologia da Informação, E.Ε.Ε.Ρ Dr. Solon Tavares, 2024</p>
            </div>
            <div class="section">
                <h3>EXPERIÊNCIA PROFISSIONAL</h3>
                <div class="section">
                    <h4>Assistente Informática, Pulse TI, Atualmente.</h4>
                    <ul>
                        <li>Auxiliei em atendimentos de N1, atendimentos em campo e manutenção em computadores em geral</li>
                        <li>Aprendi a configurações POP/IMAP</li>
                        <li>Reparei aplicações de clientes específicos</li>
                    </ul>
                </div>
                <div class="section">
                    <a href="https://drive.google.com/file/d/1B5eNQziXugkWjxNVp7dZnyvC5hxW-kun/view">Estágio em suporte e sustentação interna, Hospital de Clinicas de PoA, 2022 – 2024, 1382 Horas.</a>
                    <ul>
                        <li>Trabalhei em equipe de suporte</li>
                        <li>Aprendi e aplicou conhecimentos em diferentes areas e situações</li>
                        <li>Obtive experiência como N1 e N2, aturando desde o atendimento à resolução.</li>
                    </ul>
                </div>
            </div>
            <div class="section">
                <a href="https://www.linkedin.com/in/maur%C3%ADcio-saturnino-concei%C3%A7%C3%A3o-60727319b/details/skills/">HABILIDADES TÉCNICAS</a>
            </div>
            <div class="section">
                <h3>TCC</h3>
                <p>Meu TCC está em Progresso, se gostaria de ter uma prévia de como está ficando é só clicar <a href="https://collectivegarden.000webhostapp.com/" class="link">aqui</a>.</p>
                <p>E <a href="https://github.com/MauricioConceicao/COLLECTIVE-GARDEN">aqui</a>, voce encontra todo o projeto.</p>
            </div>
        </div>
    </div>

    

</body>
</html>