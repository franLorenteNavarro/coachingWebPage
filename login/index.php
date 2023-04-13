<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/botones.css">
    <link rel="stylesheet" href="./estiloFormulario.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<header>
    <div class="contenedorLogo"></div>
        <div class="menuEstilo">
            <ul>
                <li  onclick="window.location='../blog/';">BLOG</li>
                <li  onclick="window.location='../calendario/';">RESERVAR CITA</li>
                <li  onclick="window.location='../';">CONÓCEME</li>
                <li class="inicioSesionMenuFoto" onclick="window.location='./';"><div></div></li>
            </ul>
        </div>
    </header>
<body>
    <?php
        session_start();
        include '../sql/funciones.php';
        $conexion = abrirConexion();            
        if ($_POST) 
        {
            if (isset($_POST["login"])) 
            {
                if (comprobarLogin()) 
                {
                    crearSesion();
                    comprobarRol();
                    echo (comprobarRol());
                } 
                else 
                {
                    include './formulario.php';   
                    ?> <script src="../javascript/alertas/loginError.js"></script> <?php
                }
            }
        }
        else 
        {
            if (isset($_SESSION["usuario"])) 
            {
                comprobarRol();
            } 
            else 
            {
                include './formulario.php';   
            } 
        }
    ?>
    <div class="invitacion estilo-boton boton-info"><a class=" enlace boton-info" href="../calendario/">¿Aún no estás registrado? Reserva tu preintervención Estratégica totalmente gratuita Clickando aquí.</a></div>
    <div class="contenedorRedes">
        <a href="https://www.facebook.com/people/Francisco-Jesus-Lorente-Soriano/100009851920542/">
        <img src="../includes/imagenes/facebook.svg" alt="">
        </a>
        <a href="https://www.instagram.com/fran_lorente_/?igshid=315snsbn07qk">
        <img src="../includes/imagenes/instagram.svg" alt="">
        </a>
    </div>
    <footer><?php include '../includes/footer.php';?></footer>
</body>
</html>