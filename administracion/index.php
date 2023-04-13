<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/botones.css">
    <script src="./code.js" defer></script>
</head>
<header>
    <div class="contenedorLogo"></div>
        <div class="menuEstilo">
            <ul>
                <li  onclick="window.location='./';">Lista de Clientes</li>
                <li  onclick="window.location='./';">Añadir Articulo</li>
                <li id="tCerrarSesion" onclick="window.location='../logout.php';">CERRAR SESIÓN</li>
            </ul>
        </div>
    </header>
<body>
<div class="invitacion estilo-boton boton-info"><a class=" enlace boton-info" href="../calendario/">Admin Esta zona aún esta en proceso de construcción. Por favor vuelva atrás.</a></div>
    <footer><?php include '../includes/footer.php';?></footer>
</body>
</html>