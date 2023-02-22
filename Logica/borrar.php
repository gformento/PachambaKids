<head>
<title>BasedeDatos</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","base1") or
die("Problemas con la conexión");
mysqli_query($conexion,"delete from pachambakids") or
die("Problemas en el select:".mysqli_error($conexion));
echo "Se efectuó el borrado de todos los datos.";
mysqli_close($conexion);
?>
</body>
</html>