<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<header>
    <div class="contenedorLogo"></div>
        <div class="menuEstilo">
            <ul>
                <li  onclick="window.location='../blog/';">BLOG</li>
                <li  onclick="window.location='./';">RESERVAR CITA</li>
                <li  onclick="window.location='../';">CONÓCEME</li>
                <li class="inicioSesionMenuFoto" onclick="window.location='../login/';"><div></div</li>
            </ul>
        </div>
    </header>
<body>
    <?php
        session_start();
        require ("../sql/funciones.php");
        error_reporting(E_ERROR);
        comprobarRol();
    ?>
    <div class="contenedorRedes">
        <a href="https://www.facebook.com/people/Francisco-Jesus-Lorente-Soriano/100009851920542/">
        <img src="../includes/imagenes/facebook.svg" alt="">
        </a>
        <a href="https://www.instagram.com/fran_lorente_/?igshid=315snsbn07qk">
        <img src="../includes/imagenes/instagram.svg" alt="">
        </a>
    </div> 
<!-- Principio del widget integrado de Calendly -->
<div class="calendly-inline-widget" data-url="https://calendly.com/coachingestrategico-jesuslorente/intervencion-estrategica" style="min-width:320px;height:630px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<!-- Final del widget integrado de Calendly -->
    <footer><?php include '../includes/footer.php';?></footer>
</body>
</html>