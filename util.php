<?php

    function conectarse(){
        $link=mysqli_connect("localhost","root","", "tutor");
        return $link;

    }

    function cabecera($titulo){
        echo "<!DOCTYPE html><html lang='es-mx'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title> $titulo </title>
    <link rel='stylesheet' href='css/bootstrap.min.css'>
    <link rel='stylesheet' href='css/bootstrap-grid.min.css'>
    <link rel='stylesheet' href='css/bootstrap-reboot.min.css'>
    <link rel='stylesheet' href='css/loginCliente.css'>
    <link rel='stylesheet' href='css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>

    <script src='js/jquery-3.2.1.slim.min.js'></script>
    <script src='js/popper.min.js'></script>
    <script src='js/bootstrap.js'></script>

    <meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0'/>


</head>";
    }
?>
