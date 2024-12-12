<?php 
  require './php/essenciales.php';
  userLogin();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <link rel="stylesheet" href="./Style/Estudiantes.css">
    <link rel="stylesheet" href="./Style/estilo.css">
</head>
<body>
    
    <header > 
        <a href="https://v3.utepsa.edu/" class="logo">
         <img src="./img/Utepsa.png" alt="logo de la universidad">
         
        </a>
        <a href="https://www.facebook.com/lab.sistemas.utepsa/" class="titulo">
         <h2 class="titulo">Laboratorio de Redes y Sistemas</h2>
        </a>

        <div class="contenedor">
            <input type="checkbox" id="toggler">
            <label for="toggler" class="button"></label>

            <nav class="nav">
                <a href="#">Perfil</a>
                <a href="php/cerrar_sesion.php">Cerrar Seccion</a>
            </nav>
        </div>
     </header>
    <main class="fondo">
      


   
        <div class="container_slider">
                <input type="radio" name="slider" id="item-1" checked>
                <input type="radio" name="slider" id="item-2">
                <input type="radio" name="slider" id="item-3">

                <div class="cards">
                    <label class="card" for="item-1" id="selector-1">
                        <img src="img/Electr.jpg">
                        <div class="tituloCards">
                            <h3 class="TituloCard">Ingenieria Electrica</h3>
                        </div>
                        
                    </label>
                    <label class="card" for="item-2" id="selector-2">
                        <img src="img/ISistemas.jpg">
                        <div class="tituloCards">
                            <h3 class="TituloCard">INGENIERIA EN SISTEMAS</h3> 
                        </div>
                           
                    </label>
                    <label class="card" for="item-3" id="selector-3">
                        <img src="img/RYT.jpg">
                        <div class="tituloCards">
                            <h3 class="TituloCard">Ingenieria en Redes y Telecomunicación</h3>
                        </div>
                        
                    </label>
                </div>
         </div>
    </main>
    <footer class="pie">
        <a class="titulo">
            <h2>Plataforma de Examenes</h2>
            <h3>UTEPSA</h3>
        
        </a>
    </footer>
</body>
</html>