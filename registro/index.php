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
    <script src="./code.js" defer></script>
</head>
<header>
    <div class="contenedorLogo"></div>
        <div class="menuEstilo">
            <ul>
                <li  onclick="window.location='../';">BLOG</li>
                <li  onclick="window.location='../calendario/';">RESERVAR CITA</li>
                <li  onclick="window.location='../conoceme/';">CONÓCEME</li>
                <li class="inicioSesionMenuFoto" onclick="window.location='./';"><div></div</li>
            </ul>
        </div>
    </header>
<body>
    <?php
        session_start();
        include '../sql/funciones.php';
        
        if ($_POST) {
            $conexion = abrirConexion();
            $errores = [];
            if (isset($_POST["registrar"])) {            
                if (empty($_POST['nombre'])) {
                    $errores[] = 'El campo nombre no puede estar vacío';
                    ?> <script src="../javascript/alertas/nombreVacio.js"></script> <?php                   
                }
                else if (comprobarNombre()) {
                    $errores[] = 'El nombre no es válido';
                    ?> <script src="../javascript/alertas/nombreInvalido.js"></script> <?php
                }
                else if (empty($_POST['apellidos'])) {
                    $errores[] = 'El campo apellidos no puede estar vacío';
                    ?> <script src="../javascript/alertas/apellidosVacio.js"></script> <?php
                }
                else if (comprobarApellidos()) {
                    $errores[] = 'El campo apellidos no es válido';
                    ?> <script src="../javascript/alertas/apellidosInvalido.js"></script> <?php
                }
                else if (empty($_POST['correo'])) {
                    $errores[] = 'El campo email no puede estar vacío';
                    ?> <script src="../javascript/alertas/emailVacio.js"></script> <?php
                }
                else if (comprobarEmail()) {
                    $errores[] = 'El campo email no es válido';
                    ?> <script src="../javascript/alertas/emailInvalido.js"></script> <?php
                }
                else if (empty($_POST['telefono'])) {
                    $errores[] = 'El campo telefono no puede estar vacío';
                    ?> <script src="../javascript/alertas/telefonoVacio.js"></script> <?php
                }
                else if (comprobarTelefono()) {
                    $errores[] = 'El campo telefono no es válido';
                    ?> <script src="../javascript/alertas/telefonoInvalido.js"></script> <?php
                }               
                else if (comprobarUsuarioTlf()) { 
                    $errores[] = '¡Usuario ya registrado!';
                    ?> <script src="../javascript/alertas/dniRegistrado.js"></script> <?php
                }                                  
                else if (empty($_POST['contra']) || empty($_POST['confirmarContraseña'])) {
                    $errores[] = 'El campo contraseña no puede estar vacío';
                    ?> <script src="../javascript/alertas/contraseñaVacia.js"></script> <?php
                }                    
                else if (!empty($_POST['contra']) && !empty($_POST['confirmarContraseña'])) {
                    if (comprobarContraseñas()) {
                        $errores[] = 'Las contraseñas no coinciden';
                        ?> <script src="../javascript/alertas/contraseñasDistintas.js"></script> <?php
                    }
                    if (comprobarLongitudContraseña()) {
                        $errores[] = 'La contraseña debe ser superior a 6 dígitos';
                        ?> <script src="../javascript/alertas/contraseñaLongitud.js"></script> <?php
                    }
                }
                if ($errores) {
                    include './formulario.php';
                    mostrarErrores($errores);
                } else {                        
                    registrarCliente();         
                    $_SESSION["usuario"] = ($_POST["correo"]);
                    $_SESSION["tipo_cuenta"] = "C";
                    header("Location:../clientes");
                } 
            }                
        }
        else {
            if (isset($_SESSION["usuario"])) {
                comprobarRol();   
            }
            else {
                include './formulario.php';
            }
        }
    ?>
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