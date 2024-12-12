<?php
require 'php/conexion_log_be.php';
require 'php/essenciales.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
if (isset($_SESSION['usuario'])) {
    if ($_SESSION['rol'] == 'estudiante') {
        header("location: vista_estudiante.php");
    }
    if ($_SESSION['rol'] == 'admin') {
        header("location: Administrador.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./Style/estilo.css">
    <?php require './php/links.php'; ?>
</head>

<body>
    <header>
        <a href="https://v3.utepsa.edu/" class="logo">
            <img src="./img/Utepsa.png" alt="logo de la universidad">

        </a>
        <a href="https://www.facebook.com/lab.sistemas.utepsa/" class="titulo">
            <h2 class="titulo">Laboratorio de Redes y Sistemas</h2>
        </a>
    </header>
    <main class="fondologin">
        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar a la pagina</p>
                    <button id="btn__inisiar-sesion"> Iniciar Sesion</button>
                </div>
                <div class="caja__trasera-registro">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para Iniciar sesion y entrar a la pagina</p>
                    <button id="btn__inisiar-registrarse"> Registrarse</button>
                </div>
            </div>
            <div class="contenedor__login-register">
                <form  method="POST" class="formulario__login">
                    <h2>Iniciar sesion</h2>
                    <input type="text" placeholder="Usuario" name="User">
                    <input type="password" placeholder="contraseña" name="Pass">
                    <button type="submit" name="btnlogin">Entrar</button>
                </form>

                <form action="php/registro_usuario_be.php" method="POST" class="formulario__registro">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombres" name="Nombres">
                    <input type="text" placeholder="Apellidos" name="Apellidos">
                    <input type="text" placeholder="Numero de CI" name="Password">
                    <input type="text" placeholder="Numero de Registro" name="Usuario">
                    <button>Registrarse</button>
                </form>
            </div>

        </div>

    </main>

    <?php

    if (isset($_POST['btnlogin'])) {
        $frm_data = filteration($_POST);
        $hashedPassword = hash('sha512',$frm_data['Pass']);
        $query = "SELECT * FROM Usuarios WHERE nombre_usuario=?";
        $values = [$frm_data['User']];
        $res = select($query, $values, "s");

        if ($res->num_rows == 1) {
            $row = mysqli_fetch_assoc($res);
            $rolUsuario = $row["rol"];

            if ($hashedPassword===$row['contraseña']) {
                if($rolUsuario=="admin"){
                    $_SESSION['adminLogin'] = true;
                    $_SESSION['adminId'] = $row['user_id'];
                    redireccionar('./admin/Administrador.php');
                  
                    exit();
                }if($rolUsuario=="estudiante"){
                    $_SESSION['user'] = true;
                    $_SESSION['userId'] = $row['user_id'];
                    redireccionar('vista_estudiante.php');
                    exit();
                }
            } else {
              
                alert('error', 'Usuario o contraseña inválida');
            }
        } else {
            alert('error', 'Usuario o contraseña inválida');
        }

    }

    ?>
    <footer class="pie">
        <a class="titulo">
            <h2>Plataforma de Examenes</h2>
            <h3>UTEPSA</h3>

        </a>
    </footer>
    <?php require './php/scripts.php'; ?>
    <script src="./scripts/script.js"></script>
</body>

</html>