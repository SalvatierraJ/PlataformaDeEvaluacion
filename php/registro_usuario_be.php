<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    include 'conexion_log_be.php';

    $Nombres =$_POST['Nombres'];
    $Apellidos=$_POST['Apellidos'];
    $Contrasena=$_POST['Password'];
    $Usuario=$_POST['Usuario'];
    $Contrasena=hash('sha512',$Contrasena);


    $query="INSERT INTO Usuarios(rol, nombre, apellido, correo_electronico, nombre_usuario, contraseña, fecha_nacimiento, direccion, numero_telefono) 
            VALUES('estudiante','$Nombres','$Apellidos',NULL,'$Usuario','$Contrasena',NULL,NULL,NULL)";

    $ver_usu="SELECT * FROM Usuarios WHERE nombre_usuario='$Usuario'";
    $verificar_usuario = mysqli_query($conexion,$ver_usu);

    if(mysqli_num_rows($verificar_usuario)>0){
        echo'
        <script>
            alert("Usted ya se encuentra registrado");
            window.location="../index.php";
        </script>
        ';
        mysqli_close($conexion);
        exit();
    }

    $ver_pass="SELECT * FROM Usuarios WHERE contraseña='$Contrasena'";
    $verificar_password = mysqli_query($conexion,$ver_pass);


    if(mysqli_num_rows($verificar_password)>0){
        echo'
        <script>
            alert("Usted ya se encuentra registrado");
            window.location="../index.php";
        </script>
        ';
        mysqli_close($conexion);
        exit();
    }


        $ejecutar = mysqli_query($conexion, $query);
    

    

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location="../index.php";
            </script>

        ';
    }else{
        echo '
        <script>
            alert("error");
            window.location="../index.php";
        </script>

    ';
    }

    mysqli_close($conexion);

?>