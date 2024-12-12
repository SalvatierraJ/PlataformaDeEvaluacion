<?php
    $Servidor="localhost";
    $User="root";
    $Pass="";
    $bd="plataforma_examenes";

   
    $conexion=mysqli_connect($Servidor,$User,$Pass,$bd);

    
    function filteration($data){
        foreach($data as $key => $value){
            
            $value=trim($value);
            $value =stripslashes($value);
            $value =htmlspecialchars($value);
            $value =strip_tags($value);

            $data[$key] = $value;

        }
        return $data;
    }

    function selectAll($table){
        $con =$GLOBALS['conexion'];
        $res=mysqli_query($con,"SELECT * FROM $table");
        return $res;
    }

    function select($sql,$values,$datatypes){
        $con =$GLOBALS['conexion'];
        if($stmt=mysqli_prepare($con,$sql)){
            
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res=mysqli_stmt_get_result($stmt);
                mysqli_stmt_close($stmt);
                return $res;

            }else{
                mysqli_stmt_close($stmt);
                die("Query no se esta ejecutando - seledct");
            }
            

        }else{
            die("Query no se esta preparando - seledct");
        }
    }
    function update($sql,$values,$datatypes){
        $con =$GLOBALS['conexion'];
        if($stmt=mysqli_prepare($con,$sql)){
            
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res=mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;

            }else{
                mysqli_stmt_close($stmt);
                die("Query no se esta ejecutando - update");
            }
            

        }else{
            die("Query no se esta preparando - update");
        }
    }

    function insert($sql,$values,$datatypes){
        $con =$GLOBALS['conexion'];
        if($stmt=mysqli_prepare($con,$sql)){
            
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res=mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;

            }else{
                mysqli_stmt_close($stmt);
                die("Query no se esta ejecutando - Insert");
            }
            

        }else{
            die("Query no se esta preparando - Insert");
        }
    }

    function delete($sql,$values,$datatypes){
        $con =$GLOBALS['conexion'];
        if($stmt=mysqli_prepare($con,$sql)){
            
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res=mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;

            }else{
                mysqli_stmt_close($stmt);
                die("Query no se esta ejecutando - delete");
            }
            

        }else{
            die("Query no se esta preparando - delete");
        }
    }


?>