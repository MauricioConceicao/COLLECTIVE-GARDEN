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

</head>
<body>
        <center><div class="tutorial_cadastro">

            <ol>
                <center><li>Tutorial:</li></center>
                <li>Navegue pelo mapa, até achar a localização da planta;</li>
                <li>Em seguida, Clique exatamente no local;</li>
                <li>Assim, abrirá um formulario para cadastra-la.</li>
            </ol>

        </div></center>
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
    
                popup
                .setLatLng(e.latlng)
                .setContent("ja sabemos onde está " + e.latlng.toString())
                .openOn(map);
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
                        <span class="icon"><i class="bi bi-house-door-fill"></i></span>
                        <span class="txt-link">HOME</span>
                    </a>

                </li>

                <li class="item-menu">

                    <a href="#">
                        <span class="icon"><i class="bi bi-columns-gap"></i></span>
                        <span class="txt-link">CADASTRAR PLANTAS</span>
                    </a>

                </li>

                <li class="item-menu">

                    <a href="#">
                        <span class="icon"><i class="bi bi-columns-gap"></i></span>
                        <span class="txt-link">WIKIPÉDIA</span>
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