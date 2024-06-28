<?php
    
    if(isset($_POST['submit'])){
        include_once('config.php');
        
        
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $nomecomum = $_POST['nomecomum'];
        $nomecientifico = $_POST['nomecientifico'];
        $observacao = $_POST['observacao'];

        $result = mysqli_query($conexao, "INSERT INTO cadastro_plantas(latitude,longetude,nome_comum,nome_cientifico,observacao)
        VALUES('$latitude','$longitude','$nomecomum','$nomecientifico','$observacao')");
        header('location: home.php');
    }    

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro_planta_style.css">
    <title>Document</title>
    <!--implementando CSS da biblioteca Leaflet-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin=""/>

    <!--implementando JS da biblioteca-->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>

    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" hfef="menu.css">
    
    <div class="Alerta">
        <script>

        function showImagePopup(imageUrl) {
        var html = '<div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 10px; border: 1px solid black; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); z-index: 1000; width: 80%; max-width: 500px;"><img src="' + imageUrl + '" alt="Imagem" style="max-width: 100%; height: auto;"><button style="position: absolute; top: 10px; right: 10px; background-color: #FF0000; color: #FFFFFF; border: none; font-size: 20px; font-weight: bold; cursor: pointer; padding: 5px 10px; border-radius: 5px;">X</button></div>';
        document.body.insertAdjacentHTML('beforeend', html);

        // Função para fechar o popup
        function closePopup() {
            var popup = document.querySelector('div[style*="position: fixed;"]');
            if (popup) {
            popup.remove();
            }
        }

        // Adicionar o evento de clique no botão de fechar
        var closeButton = document.querySelector('button[style*="position: absolute;"]');
        if (closeButton) {
            closeButton.addEventListener('click', closePopup);
        }
        }

        // Chamar a função com a URL da imagem
        
        showImagePopup('./imagensPlantas/TUTORIAL.gif');

        </script>
    </div>
    

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

        <!--implementando o mapa-->

        <div id="map"></div>
        
        <!--Iniciando JS-->    
            
        <script>

            



    
            //define onde o mapa fica estatico.
    
                var map = L.map('map').setView([-30.110162, -51.326065], 13);
    
            //define o estilo(layer) do mapa.
                   
                var layer = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                });
    
        
            
            //adiciona o layer no mapa.
           
                 layer.addTo(map);


                
            

            //armazenando a latitude e a longitude no php.
            
            var popup = L.popup();


            function onMapClick(e) {
                var latitude = e.latlng.lat; // Obter a latitude
                var longitude = e.latlng.lng; // Obter a longitude
    
                // Criar um objeto FormData e adicionar os dados
                var formData = new FormData();
                formData.append('latitude', latitude);
                formData.append('longitude', longitude);
    
                // Enviar os dados para o arquivo PHP usando Fetch
                fetch('http://localhost/COLLECTIVE-GARDEN/pegalocaliza.php?lat=', {
                    method: 'POST',
                    body: formData
                })
                

                .then(response => {
                    if (response.ok) {
                        console.log('Dados enviados com sucesso para o PHP.');
                    }else {
                        console.error('Erro ao enviar os dados para o PHP.');
                    }
                })
                .catch(error => {
                    console.error('Erro ao enviar os dados para o PHP:', error);
                });
                
                
                const formHtml = `
                    <form id="plant-form" action="cadastro_planta.php" method="POST">
                        
                        <input type="hidden" id="latitude" value="${latitude}" name="latitude"><br><br>
                        <input type="hidden" id="longitude" value="${longitude}" name="longitude"><br><br>

                        <label for="common-name">Nome Comum:</label>
                        <input type="text" id="common-name" name="nomecomum"><br><br>

                        <label for="scientific-name">Nome Científico:</label>
                        <input type="text" id="scientific-name" name="nomecientifico"><br><br>
                        
                        <label for="observation">Observação:</label>
                        <textarea id="observation" name="observacao"></textarea><br><br>
                    
                        

                        
                        <input type="submit" name="submit" id="submit">
                    </form>

                <style>
                    /* Estilo para o popup */
                    .leaflet-popup-content {
                    background-image: linear-gradient(to bottom, #34C759, #000);
                    background-size: 100% 100%;
                    padding: 20px;
                    text-align: center;
                    color: #fff; /* Cor do texto: branco */
                    font-size: 16px; /* Tamanho do texto: 16 pixels */
                    font-family: Arial, sans-serif; /* Fonte: Arial ou sans-serif */
                    }

                    /* Estilo para o formulário dentro do popup */
                    #plant-form {
                    display: inline-block;
                    text-align: left;
                    }

                    #plant-form label {
                    display: block;
                    margin-bottom: 10px;
                    color: #fff; /* Cor do texto: branco */
                    font-size: 14px; /* Tamanho do texto: 14 pixels */
                    font-weight: bold; /* Estilo do texto: negrito */
                    }

                    #plant-form input, #plant-form textarea {
                    width: 100%;
                    padding: 10px;
                    margin-bottom: 20px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    color: #333; /* Cor do texto: cinza escuro */
                    font-size: 14px; /* Tamanho do texto: 14 pixels */
                    }

                    #plant-form button[type="submit"] {
                    background-color: #34C759;
                    color: #fff; /* Cor do texto: branco */
                    padding: 10px 20px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    font-size: 16px; /* Tamanho do texto: 16 pixels */
                    font-weight: bold; /* Estilo do texto: negrito */
                    }

                    #plant-form button[type="submit"]:hover {
                    background-color: #2E865F;
                    }
                </style>
                `;

                popup
                .setLatLng(e.latlng)
                .setContent(`
                    <p>É aqui que fica sua planta? ${e.latlng.toString()}</p>
                    ${formHtml}
                `)
                .openOn(map);

                // Adiciona evento de clique ao botão
                document.getElementById('submit-button').addEventListener('click', function(event) {
                event.preventDefault(); // Evita que o formulário seja submetido por padrão
                const formData = {
                    commonName: document.getElementById('common-name').value,
                    scientificName: document.getElementById('scientific-name').value,
                    observation: document.getElementById('observation').value,
                    location: e.latlng
                };
                console.log('Formulário submetido:', formData);
                // Aqui você pode chamar uma função para salvar os dados no banco de dados, por exemplo:
                savePlantData(formData);
                });

                
            }
            map.on('click', onMapClick);

            
        </script>

        <!-- implementando menu -->
        <!--implementando botao menu-->
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


        

</body>
</html>