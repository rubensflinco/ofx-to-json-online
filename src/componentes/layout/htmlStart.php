<!DOCTYPE html>
<html lang="<?php echo $_ENV['IDIOMA'] ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light">
    <link rel="icon" href="<?php echo $pathUrl;?>/assets/img/astronauta-perfil-fundo-transparente.png">

    <!-- jQuery -->
    <script type="text/javascript" src="<?php echo $pathUrl;?>/vendor/components/jquery/jquery.min.js"></script>

    <!-- Bootstrap -->
     <link href="<?php echo $pathUrl;?>/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="<?php echo $pathUrl;?>/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <link href="<?php echo $pathUrl;?>/libs/font-awesome-5.12.0/css/all.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="<?php echo $pathUrl;?>/libs/font-awesome-5.12.0/js/all.min.js"></script>

    <!-- Global Css -->
    <link href="<?php echo $pathUrl;?>/assets/css/global.css" rel="stylesheet"/>

    <!-- Dropzone -->
    <link href="<?php echo $pathUrl;?>/vendor/enyo/dropzone/dist/min/dropzone.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="<?php echo $pathUrl;?>/vendor/enyo/dropzone/dist/min/dropzone.min.js"></script>

</head>

<div class="theme-body">
    <?php 
        include $PATH_ROOT."/src/componentes/menu.php";
    ?>