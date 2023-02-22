
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","base1") or
die("Problemas con la conexión");
mysqli_query($conexion,"insert into remeras (pedido,talles,mail) values
('$_REQUEST[pedido]','$_REQUEST[talles]','$_REQUEST[mail]')")
or die("Problemas en el select".mysqli_error($conexion));
mysqli_close($conexion);

echo "Los datos se registraron correctamente. Proximamente lo estaremos contactando, Muchas Gracias.";
 
?>
<a href="IGU/index.php"><input type="button" value="Volver al Inicio "></a>
</body>
</html>