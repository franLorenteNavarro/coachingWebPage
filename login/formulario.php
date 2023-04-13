<form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
    <fieldset>
        <h2>Iniciar Sesión</h2>
        <div class="contenedorCampos">
            <label class="campo">Correo/Teléfono:</label>
            <input class="user" type="text" name="user">
        </div>
        <div class="contenedorCampos">
            <label class="campo">Contraseña:</label>
            <input class="contra" type="password" name="contra">
        </div>
        <div class="contenedorBotones">
            <input class="estilo-boton boton-principal" type="submit" name="login" value="Iniciar Sesión">
            <a href="../recuperarContraseña" class="estilo-boton boton-secundario" id="tButContraseña" draggable="false">¿Has olvidado tu contraseña?</a>
        </div>
    </fieldset>
</form>