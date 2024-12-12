<?php 
   require('essenciales.php');
   session_start();
   session_destroy();
   redireccionar('../../index.php');
 
?>