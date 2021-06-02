<?php

    $hostname_cn = "localhost";
    $database_cn = "imagen";
    $username_cn = "root";
    $password_cn = "";

    $conexion = new mysqli($hostname_cn, $username_cn, $password_cn,$database_cn);
   // $conexion = mysqli_connect($hostname_cn, $username_cn, $password_cn,$database_cn) or trigger_error(mysql_error(),E_USER_ERROR); 
?>