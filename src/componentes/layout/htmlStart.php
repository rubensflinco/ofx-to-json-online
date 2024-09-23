<!DOCTYPE html>
<html lang="<?php echo $_ENV['IDIOMA'] ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $pathUrl;?>/assets/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $pathUrl;?>/assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $pathUrl;?>/assets/icon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $pathUrl;?>/assets/icon/site.webmanifest">

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

    <!-- Tags Snippets -->
    <meta name="msvalidate.01" content="95945B5C333979BFC9AB593DAC527532" />
    <meta name="google-adsense-account" content="ca-pub-7169391558658534">
    <meta name="google-site-verification" content="59YXkT3_q1FWwkUC3eMV9BrTTAEOBfDcVXsVSU4A8k8" />
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "o7ki2sfjw7");
    </script>


</head>

<div class="theme-body">
    <?php 
        include $PATH_ROOT."/src/componentes/menu.php";
    ?>