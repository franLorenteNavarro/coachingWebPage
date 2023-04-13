<?php
session_start();
require ("../sql/funciones.php");
error_reporting(E_ERROR);
comprobarRol();
listar_articulos();
?>


