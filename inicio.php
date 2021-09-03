<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="dos.php" method="POST" name="lol" >

    <h2>Ingrese cuantos datos desea operar</h2>
    <input type="text" name="extend">

    <h2>Ingrese el limite de datos</h2>
    <input type="text" name="limit">



    <h2>seleccione que operacion decea realizar</h2>
    <select name="select" id="">
        <option value="suma">suma</option>
        <option value="promedio">promedio</option>
        <option value="Mayor">Digito Mayor</option>
        <option value="menor">Digito menor</option>

    </select>


    <input type="submit" placeholder="enviar">



    </form>
    
</body>
</html>