<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/forms.css">

    <title>ComercioMas || Registro</title>
</head>
<body>
    <div class="conte">
        <div class="form-prin">
            <form action="../controladores/reg.php" method="POST">
              <section class="form-register">
                <h4>Formulario Registro</h4>
                <input class="controls" type="text" name="ob1" id="nombres" placeholder="Ingrese su(s) Nombre(s)">

                <input class="controls" type="text" name="ob2" id="apellidos" placeholder="Ingrese su(s) Apellido(s)">

                <input class="controls" type="text" name="ob3" id="usuario" placeholder="Nombre de usuario">

                <input class="controls" type="email" name="ob4" id="correo" placeholder="Ingrese su Correo">

                <input class="controls" type="password" name="ob5" id="contra" placeholder="Ingrese su Contraseña">

                <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
                <input class="botons" name="enviar" type="submit" value="Registrar">
                <p><a href="#">¿Ya tengo Cuenta?</a></p>
              </section>
            </form>

        
        </div>

    </div>
</body>
</html>