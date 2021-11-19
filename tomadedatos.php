
<html>
<head>
<title>Pedido Realizado</title>
</head>
<body>
   

<?php
$conexion=mysqli_connect("localhost","root","","base1") or
die("Problemas con la conexión");
mysqli_query($conexion,"insert into pachambakids (talle,email,ciudad,direccion) values
('$_REQUEST[talle]','$_REQUEST[email]','$_REQUEST[ciudad]','$_REQUEST[direccion]')")
or die("Problemas en el select".mysqli_error($conexion));
mysqli_close($conexion);

echo "Los datos se registraron correctamente. Proximamente lo estaremos contactando, Muchas Gracias por su compra.";
 
?>
<br> <br>
<br>
<a href="index.php"><input type="button" value="Volver"></a>
</body>
</html>