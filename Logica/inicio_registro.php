<!DOCTYPE html>
<html>
<head>
	<title>Registo de Cliente - PachambaKids©</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../IGU/estilo_registro.css">
</head>
<body>
    <form method="post">
    	<h1>¡Bienvenido! Ingresa tus datos a continuacion para registrarte como cliente: </h1>
    	Nombre: <input type="text" name="nombre"> </input> <br>
    	<br> Apellido: <input type="text" name="apellido"> </input>  <br>
		<br> Direccion: <input type="text" name="direccion"> </input>  <br>
		<br> Telefono: <input type="text" name="telefono">  </input>  <br>
    	<br> Email: <input type="email" name="mail">  </input>  <br>
    	<br> Clave: <input type="password" name="clave"></input>  <br>

    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>