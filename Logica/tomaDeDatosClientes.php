<html>
<head>
<title>PachambaKids©</title>
</head>
<body>
<?php
include("con_db.php");
$conexion=mysqli_connect("localhost","root","", "pachambakids") or
die("Problemas con la conexión");
mysqli_query($conexion,"INSERT INTO Clientes (mail,clave) values
('$_REQUEST[email]','$_REQUEST[clave]')")
or die("Problemas en el select".mysqli_error($conexion));


if (isset($_POST['login.php'])) {
    if (strlen($_POST['email']) >= 1 && strlen($_POST['clave']) >= 1) {
		$mail = trim($_POST['email']);
		$clave = trim($_POST['clave']);
	    $consulta = "INSERT INTO clientes(mail, clave,) VALUES ('$mail','$clave')";
        $mailCliente = "INSERT INTO clientes(mail) VALUES ('$mail')";
        $claveCliente = "INSERT INTO clientes(clave) VALUES ('$clave')";
        if ($mail == $mailCliente && $clave == $claveCliente){
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado = true) {
	    	?> 
			<?php header('Location: ../Logica/login.php');
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }
}
}

?>
<br> <br>
<br>
<a href="../IGU/index.php"><input type="button" value="Volver al Inicio"></a>
</body>
</html>

