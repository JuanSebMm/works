<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links de estilos -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../estilos/normalize.css">
    <link rel="stylesheet" href="../estilos/Fr_us.css">
    <title>Document</title>
</head>
<body>

<main>
    <h1>ComercioMas</h1>
    <h4>Registrate para conocer los mejores locales de la localidad de soacha</h4>
    <form action="" class="formulario" id="formulario">
        <!-- Nombre de usuario -->
        <div class="formulario__grupo" id="grupo__usuario">
            <label for="usuario" class="formulario__label">Usuario</label>
            <div class="formulario__grupo-input"> 
                <input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="Usuario123" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El usuario tiene que ser de 4 a 15 dígitos y solo puede contener numeros, letras y guion bajo.</p>
        </div>

        <!-- Nombres de Persona -->
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Nombre</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre Ejemplo" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El Nombre debe de tener de 4 a 16 dígitos y solo puede contener letras y espacios.</p>
        </div>

        <!-- Apellidos de personas-->

        <div class="formulario__grupo" id="grupo__apellidos">
            <label for="apellidos" class="formulario__label">Apellidos</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="apellidos" id="apellidos" placeholder="Apellido ejemplo" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El Nombre debe de tener de 4 a 16 dígitos y solo puede contener letras y espacios.</p>
        </div>

        <!-- Numero de telefono -->

        <div class="formulario__grupo" id="grupo__telefono">
            <label for="telefono" class="formulario__label">Teléfono</label>
            <div class="formulario__grupo-input">
                <input type="number" class="formulario__input" name="telefono" id="telefono" placeholder="123456789" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 10 dígitos.</p>
        </div>

        <!-- Numero de Respaldo -->

        <div class="formulario__grupo" id="grupo__telefono">
            <label for="telefono" class="formulario__label">Teléfono Secundario</label>
            <div class="formulario__grupo-input">
                <input type="number" class="formulario__input" name="telefono" id="telefono" placeholder="123456789">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 10 dígitos.</p>
        </div>

        <!-- Correo electronico -->

        <div class="formulario__grupo" id="grupo__correo">
            <label for="correo" class="formulario__label">Correo Electrónico</label>
            <div class="formulario__grupo-input">
                <input type="email" class="formulario__input" name="correo" id="correo" placeholder="correoEjemplo01@gmail.com" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
        </div>

        <!-- Contraseña de Usuario -->

        <div class="formulario__grupo" id="grupo__password">
            <label for="password" class="formulario__label">Contraseña</label>
            <div class="formulario__grupo-input">
                <input type="password" class="formulario__input" name="password" id="password" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
        </div>
    
        <!-- Confirmar Contraseña -->

        <div class="formulario__grupo" id="grupo__password2">
            <label for="password2" class="formulario__label">Repetir Contraseña</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="password2" id="password2" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
        </div>

        <!-- Terminos y Condiciones -->

        <div class="formulario__grupo" id="grupo__terminos">
            <label class="formulario__label">
                <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
                Acepto los Terminos y Condiciones
            </label>
        </div>
        
        <!-- Error de Datos Vacios -->

        <div class="formulario__mensaje" id="formulario__mensaje">
            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
        </div>
        
        <!-- Boton de enviar -->

        <div class="formulario__grupo formulario__grupo-btn-enviar">
            <button type="submit" class="formulario__btn">Enviar</button>
            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
        </div>


    </form>
</main>
    
</body>

<!-- Link de funcionamiento -->
<script src="../Fn_js/Info_form.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"></script>
</html>