
<html>
<head>
<title>Pedido Realizado - PachambaKids©</title>
</head>
<body>
<?php
$talles = implode( ",",$_REQUEST["talle"]);
$conexion=mysqli_connect("localhost","root","", "pachambakids") or
die("Problemas con la conexión");
mysqli_query($conexion,"insert into pedidos (talles,email,direccion,telefono) values
('$talles','$_REQUEST[email]','$_REQUEST[ciudad]','$_REQUEST[direccion]','$_REQUEST[telefono]')")
or die("Problemas en el select".mysqli_error($conexion));
mysqli_close($conexion);

echo "Los datos se registraron correctamente. Proximamente lo estaremos contactando, Muchas Gracias por su compra.";
 
?>
<br> <br>
<br>
<a href="../IGU/index.php"><input type="button" value="Volver al Inicio"></a>
</body>
</html>