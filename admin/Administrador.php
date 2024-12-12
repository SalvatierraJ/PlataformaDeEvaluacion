 <?php
   require './php/essenciales.php';
   adminLogin();

    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style/Administrador.css">
     <link rel="stylesheet" href="style/menu.css">
     <?php require './php/links.php'; ?>
     <title>Administrador</title>
 </head>

 <body>
 <?php require './php/nav.php'; ?>

     <section class="dashboard" id="dashboard">
         <div class="top">
             <ion-icon class="navToggle" name="menu-outline"></ion-icon>
             <div class="searchBox">
                 <ion-icon name="search-outline"></ion-icon>
                 <input type="text" placeholder="Search">
             </div>
           
         </div>
         <div class="container section">
             <div class="overview">
                 <div class="title">
                     <ion-icon name="speedometer"></ion-icon>
                     <span class="text">Dashboard</span>
                 </div>
                 <div class="boxes">
                     <div class="box box1">
                         <ion-icon name="accessibility-outline"></ion-icon>
                         <span class="text">Total Estudiantes</span>
                         <span class="number">112,567</span>
                     </div>
                     <div class="box box2">
                         <ion-icon name="accessibility-outline"></ion-icon>
                         <span class="text">Total Docentes</span>
                         <span class="number">112,567</span>
                     </div>
                     <div class="box box3">
                         <ion-icon name="newspaper-outline"></ion-icon>
                         <span class="text">Total Examenes</span>
                         <span class="number">112,567</span>
                     </div>
                 </div>
             </div>
             <div class="activity">
                 <div class="title">
                     <ion-icon name="time-outline"></ion-icon>
                     <span class="text">Recent Members</span>
                 </div>
                 <div class="activity-data">
                     <div class="data names">
                         <span class="data-title">Nombre</span>
                     </div>
                     <div class="data email">
                         <span class="data-title">Registro</span>
                     </div>
                     <div class="data joined">
                         <span class="data-title">Hora Ingreso</span>
                     </div>
                 </div>
             </div>
         </div>
         <div class="Examenes section" style="display: none;">
             <div class="overview">
                 <div class="title">
                     <span class="text">Examenes</span>
                 </div>
                 <div class="agregar" id="03">
                     <div class="box" id="04">
                         <ion-icon name="add"></ion-icon>
                     </div>

                 </div>

             </div>
         </div>
     </section>




 
     <?php require './php/scripts.php'; ?>
 </body>

 </html>