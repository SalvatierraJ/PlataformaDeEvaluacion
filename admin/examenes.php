<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style//menu.css">
    <?php require './php/links.php'; ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Examenes-administrar</title>
</head>

<body>
    <?php require './php/nav.php'; ?>
    <section class="dashboard" id="dashboard">
        <div class="top">
            <ion-icon class="navToggle" name="menu-outline"></ion-icon>


        </div>
        <div class="Examenes section">
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

    <div class="bg-modal">
        
    </div>


    <?php require './php/scripts.php'; ?>
    <script src="./scripts/examen/Examenes.js"></script>
    <script src="./scripts/examen/CuadroImagenExamenes.js"></script>
</body>

</html>