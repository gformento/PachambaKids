<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['mail']) >= 1 && strlen($_POST['clave']) >= 1) {
		$mail = trim($_POST['mail']);
		$clave = trim($_POST['clave']);
	    $consulta = "INSERT INTO clientes(mail, clave,) VALUES ('$mail','$clave')";
        $mailCliente = "INSERT INTO clientes(mail) VALUES ('$mail')";
        $claveCliente = "INSERT INTO clientes(clave) VALUES ('$clave')";
       
}
}

?>