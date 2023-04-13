<!-- abrirConexion -->
<?php
function abrirConexion() {
    try{
        $conexion = new PDO("mysql:host=localhost;dbname=u654127944_blog", "u654127944_administrador", "@Ff!d^gqm2");
    
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        //Mostramos un error al usuario en caso de no conectar la base de datos
        die("<p class='errorSQL'>ERROR CATASTRÓFICO: No se puede conectar. " . $e->getMessage()) . "</p>";
    }
    return $conexion;
}
?>

<!-- general formularios -->
<?php
function mostrarCampos($campo) {
    if (isset($_POST[$campo])) {
        echo 'value="' . $_POST[$campo] . '"';
    }
}
function mostrarErrores($errores) {
    // print_r($errores);
}

function comprobarNombre() {
    $nombre = $_POST["nombre"];
    $patron = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";

    if (preg_match($patron, $nombre)) {
        if (strlen($nombre)>=3 && strlen($nombre)<=50) {
            return false;
        } else {
            return true;
        }
    } else {
        return true;
    }
}

function comprobarApellidos() {
    $apellidos = $_POST["apellidos"];
    $patron = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";

    if (preg_match($patron, $apellidos)) {
        if (strlen($apellidos)>=3 && strlen($apellidos)<=100) {
            return false;
        } else {
            return true;
        }
    } else {
        return true;
    }
}

function comprobarEmail() {
    $email = $_POST["correo"];
    
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    } else {
        return true;
    }
}

function comprobarTelefono() {
    $telefono = $_POST["telefono"];
    $patron = '/^(6|7)[ -]*([0-9][ -]*){8}$/';

    if (preg_match($patron, $telefono)) {
        return false;
    } else {
        return true;
    }
}

function comprobarContraseñas() {
    $contraseña1 = $_POST["contra"];
    $contraseña2 = $_POST["confirmarContraseña"];
    
    if ($contraseña1 == $contraseña2) {
        return false;
    } else {
        return true;
    }
}

function comprobarLongitudContraseña() {
    $contraseña = $_POST["contra"];

    if (strlen($contraseña)>=6) {
        return false;
    } else {
        return true;
    }
}
?>
<!-- articulos -->
<?php
function listar_articulos() {
    require ("../sql/conexion.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña);


        if (mysqli_connect_errno()) 
        {
            echo "Fallo al conectar con la base de datos";
            exit();
        }
        mysqli_select_db($conexion, $db_nombre) or die ("no se encuentra la base de datos");
        mysqli_set_charset($conexion, "utf8");
        $consulta = "SELECT * FROM  articulo";
        $resultados=mysqli_query($conexion,$consulta);
        
        while ($fila=mysqli_fetch_array($resultados))
        {
            
            $id=$fila['id'];
            $titulo=$fila['titulo'];
            $texto=$fila['texto'];
?>
        <div id="<?php echo("articulo$id")?>" onclick="window.location='./articulo/articulo<?php echo($id)?>.php';">

            <?php
                echo("<h1>$titulo</h1>");
                echo("<p>$texto</p>");
            ?>
        </div>
<?php  
    }
}
?>
<!-- Comprobar Sesion -->
<?php
function comprobarRol() {
    
    require ("../sql/conexion.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña);
    $usuario = $_SESSION['usuario'];

    if (mysqli_connect_errno()) 
    {
        echo "Fallo al conectar con la base de datos";
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die ("no se encuentra la base de datos");
    mysqli_set_charset($conexion, "utf8");
    $consulta = "SELECT tipo_cuenta FROM  usuarios WHERE correo = '$usuario'";
    $resultados=mysqli_query($conexion,$consulta);
    
    while ($fila=mysqli_fetch_array($resultados))
    {
        
        $rol=$fila['tipo_cuenta'];
    }
    if($rol == "C") {
        $_SESSION['tipo_cuenta'] = "C";
        header("Location:../clientes"); 
    }
    else if ($rol == "A"){
        $_SESSION['tipo_cuenta'] = "A";
        header("Location:../administracion");
    }
}
function comprobarRolInicio() {
    
    require ("./sql/conexion.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña);
    $usuario = $_SESSION['usuario'];

    if (mysqli_connect_errno()) 
    {
        echo "Fallo al conectar con la base de datos";
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die ("no se encuentra la base de datos");
    mysqli_set_charset($conexion, "utf8");
    $consulta = "SELECT tipo_cuenta FROM  usuarios WHERE correo = '$usuario'";
    $resultados=mysqli_query($conexion,$consulta);
    
    while ($fila=mysqli_fetch_array($resultados))
    {
        
        $rol=$fila['tipo_cuenta'];
    }
    if($rol == "C") {
        $_SESSION['tipo_cuenta'] = "C";
        header("Location:./clientes"); 
    }
    else if ($rol == "A"){
        $_SESSION['tipo_cuenta'] = "A";
        header("Location:./administracion");
    }
}
?>

<!-- login -->
<?php
function comprobarLogin() {
    $conexion = abrirConexion();    
    $usuario= ($_POST['user']);
    $usuariotlf= intval($usuario);
    $contra= md5($_POST['contra']);
    if(strlen($usuario) == 9 && $usuariotlf)
    {
        $sql="SELECT * FROM usuarios WHERE telefono = '$usuariotlf' and contra = '$contra'";
        
    }else {
        $sql="SELECT * FROM usuarios WHERE correo = '$usuario' and contra = '$contra'";

    }
    

    $consulta = $conexion->query($sql);

    $contador = $consulta->rowCount();

    if ($contador>0) {
        return true;
    } else {
        return false;
    }         
}
function crearSesion() {
    require ("../sql/conexion.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña);


    if (mysqli_connect_errno()) 
    {
        echo "Fallo al conectar con la base de datos";
        exit();
    }
    if(comprobarLogin()){
        $usuario= $_POST['user'];
        $usuariotlf= intval($usuario);
        if(strlen($usuario) == 9 && $usuariotlf)
        {
            require ("../sql/conexion.php");
            $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña);


            if (mysqli_connect_errno()) 
            {
                echo "Fallo al conectar con la base de datos";
                exit();
            }
            mysqli_select_db($conexion, $db_nombre) or die ("no se encuentra la base de datos");
            $consulta="SELECT correo FROM usuarios WHERE telefono = $usuariotlf";
            mysqli_set_charset($conexion, "utf8");
            $resultados=mysqli_query($conexion,$consulta);
            while ($fila=mysqli_fetch_array($resultados))
            {
                
                $_SESSION['usuario'] = $fila['correo'];
            }
            
        } else {
            $_SESSION['usuario'] = $usuario;
        }
    }
    return $_SESSION['usuario'];
}
?>
<!-- registro usuario -->
<?php

function comprobarUsuarioTlf() {
    $conexion = abrirConexion();    
    $usuario= ($_POST['telefono']);
    
    $sql="SELECT * FROM usuarios WHERE telefono = '$usuario'";
    $consulta = $conexion->query($sql);    
    $contador = $consulta->rowCount();

    if ($contador>0) {
        return true;
    } else {
        return false;
    }          
}
    
function comprobarUsuarioCorreo() {
    $conexion = abrirConexion();    
    $usuario= ($_POST['correo']);
    
    $sql="SELECT * FROM usuarios WHERE correo = '$usuario'";
    $consulta = $conexion->query($sql);    
    $contador = $consulta->rowCount();

    if ($contador>0) {
        return true;
    } else {
        return false;
    }
}  

function registrarCliente() {
    $conexion = abrirConexion();  
    $nombre= $_POST["nombre"];
    $apellidos= $_POST["apellidos"];
    $correo= strtolower($_POST["correo"]);
    $telefono= $_POST["telefono"];
    $contra= md5($_POST["contra"]);
    
    $sql ="INSERT INTO usuarios( nombre, apellidos, correo, telefono, contra) VALUES ('$nombre', '$apellidos', '$correo', $telefono, '$contra')";
    $consulta = $conexion->query($sql);
}
?>

