<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function adminLogin(){
    session_start();
    if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']=true)){
        echo"
        <Script>
        window.location.href='index.php';
        </script>
    ";
    exit;
    }
    
}

function userLogin(){
    session_start();
    if(!(isset($_SESSION['user']) && $_SESSION['user']=true)){
        echo"
        <Script>
        window.location.href='index.php';
        </script>
    ";
    exit;
    }
    
}

function redireccionar($url){
    echo"
        <Script>
        window.location.href='$url';
        </script>
    ";
    exit;
}

function alert($type,$msg){
    $bs_class = ($type =="success") ? "alert-success" : "alert-danger";
    echo <<<alert
    <div class="alert $bs_class alert-dismissible position-fixed fade show custom-alert" role="alert">
        <strong class="me-3">$msg </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    alert;
}







?>
