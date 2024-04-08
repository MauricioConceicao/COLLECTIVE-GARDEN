<?php
    session_start();
    if((!isset($_SESSION['email'])== true) and (!isset($_SESSION['senha']) == true)){
        
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('location: index.php');
        

    }else{
        $logado = $_SESSION['email'];

    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Nome e icone da ABA-->
        <title>COLLECTIVE GARDEN!</title>
        <link rel="shortcut icon" href="icons/iconeembranco-transformed.ico" type="image/x-icon">

    <!--implementando CSS do projeto-->
        <link rel="stylesheet" href="style.css">
    
    <!--implementando CSS da biblioteca Leaflet-->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin=""/>

    <!--implementando JS do projeto-->
        <script src="script.js"></script>

    <!--implementando JS da biblioteca Leaflet-->
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>

    <!--extensao do bootstrap icons-->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   
    
</head>
<body>

    
    
     
    

    
    <!--implementando mapa-->
               
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


        //=================configs de elementos no mapa==================

        // adiciona marcador(pointers) de localizaçoes de plantas.  
            
            

            var terramissina = L.marker([-30.093386, -51.334363],{
                draggable:false, //opçao de arrastar o pointer.
                title: "terramissina"}//terramissina
            ).addTo(map).bindPopup('<div id="terramissina_pop"><center><h4>Terramicina Antibiótico Natural</h4><p>Por causa de sua ação diurética e anti-inflamatória o chá de terramicina é um ótimo aliado na eliminação da bactéria Escherichia coli causadora da cistite.</p><img src="imagensPlantas/terramissina.jpg" style="height: auto; height: auto;" alt=""></center></div>');
        
            var Alecrin = L.marker([-30.0900784,-51.3371068],{
                draggable:false, //opçao de arrastar o pointer.
                title: "Alecrin"}//terramissina
            ).addTo(map).bindPopup('<div id="terramissina_pop"><center><h4>Terramicina Antibiótico Natural</h4><p>Por causa de sua ação diurética e anti-inflamatória o chá de terramicina é um ótimo aliado na eliminação da bactéria Escherichia coli causadora da cistite.</p><img src="imagensPlantas/terramissina.jpg" style="height: auto; height: auto;" alt=""></center></div>');
        
            var Menta = L.marker([-30.0939731,-51.3405912],{
                draggable:false, //opçao de arrastar o pointer.
                title: "Menta"}//terramissina
            ).addTo(map).bindPopup('<div id="terramissina_pop"><center><h4>Terramicina Antibiótico Natural</h4><p>Por causa de sua ação diurética e anti-inflamatória o chá de terramicina é um ótimo aliado na eliminação da bactéria Escherichia coli causadora da cistite.</p><img src="imagensPlantas/terramissina.jpg" style="height: auto; height: auto;" alt=""></center></div>');
            
            var Limoeiro = L.marker([-30.0900627,-51.3230465],{
                draggable:false, //opçao de arrastar o pointer.
                title: "Limoeiro"}//terramissina
            ).addTo(map).bindPopup('<div id="terramissina_pop"><center><h4>Terramicina Antibiótico Natural</h4><p>Por causa de sua ação diurética e anti-inflamatória o chá de terramicina é um ótimo aliado na eliminação da bactéria Escherichia coli causadora da cistite.</p><img src="imagensPlantas/terramissina.jpg" style="height: auto; height: auto;" alt=""></center></div>');
        
            var terramissina = L.marker([-30.089972,-51.3338659],{
                draggable:false, //opçao de arrastar o pointer.
                title: "terramissina"}//terramissina
            ).addTo(map).bindPopup('<div id="terramissina_pop"><center><h4>Terramicina Antibiótico Natural</h4><p>Por causa de sua ação diurética e anti-inflamatória o chá de terramicina é um ótimo aliado na eliminação da bactéria Escherichia coli causadora da cistite.</p><img src="imagensPlantas/terramissina.jpg" style="height: auto; height: auto;" alt=""></center></div>');
        
            var Bananneira = L.marker([-30.0901091,-51.3319769],{
                draggable:false, //opçao de arrastar o pointer.
                title: "Bananneira"}//terramissina
            ).addTo(map).bindPopup('<div id="terramissina_pop"><center><h4>Terramicina Antibiótico Natural</h4><p>Por causa de sua ação diurética e anti-inflamatória o chá de terramicina é um ótimo aliado na eliminação da bactéria Escherichia coli causadora da cistite.</p><img src="imagensPlantas/terramissina.jpg" style="height: auto; height: auto;" alt=""></center></div>');
        
            var Pessegueiro = L.marker([-30.0901091,-51.3319769],{
                draggable:false, //opçao de arrastar o pointer.
                title: "Pessegueiro"}//terramissina
            ).addTo(map).bindPopup('<div id="terramissina_pop"><center><h4>Terramicina Antibiótico Natural</h4><p>Por causa de sua ação diurética e anti-inflamatória o chá de terramicina é um ótimo aliado na eliminação da bactéria Escherichia coli causadora da cistite.</p><img src="imagensPlantas/terramissina.jpg" style="height: auto; height: auto;" alt=""></center></div>');
        
            var terramissina = L.marker([-30.0889555,-51.3368428],{
                draggable:false, //opçao de arrastar o pointer.
                title: "terramissina"}//terramissina
            ).addTo(map).bindPopup('<div id="terramissina_pop"><center><h4>Terramicina Antibiótico Natural</h4><p>Por causa de sua ação diurética e anti-inflamatória o chá de terramicina é um ótimo aliado na eliminação da bactéria Escherichia coli causadora da cistite.</p><img src="imagensPlantas/terramissina.jpg" style="height: auto; height: auto;" alt=""></center></div>');
            
            var Bananneira = L.marker([-30.0884742,-51.3374024],{
                draggable:false, //opçao de arrastar o pointer.
                title: "Bananneira"}//terramissina
            ).addTo(map).bindPopup('<div id="terramissina_pop"><center><h4>Terramicina Antibiótico Natural</h4><p>Por causa de sua ação diurética e anti-inflamatória o chá de terramicina é um ótimo aliado na eliminação da bactéria Escherichia coli causadora da cistite.</p><img src="imagensPlantas/terramissina.jpg" style="height: auto; height: auto;" alt=""></center></div>');
        
            


        //popups em objetos.

            //PopUp no pointer
                //oro.bindPopup(menu).openPopup();
                //terramissina.bindPopup(menu).openPopup();
            //PopUp no circulo
                //circle.bindPopup("I am a circle.");
            //PopUp no poligono
                //polygon.bindPopup("I am a polygon.");

        //popup independente.

            //var popup = L.popup()
            //.setLatLng([-30.115731, -51.327438])
            //.setContent("I am a standalone popup.")
            //.openOn(map);

    </script>
       
        <!--=======================implementando objetos na aplicaçao web========================================-->
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

                    <a href="cadastro_planta.php">
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