<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}
?>
<html>
	<head>
		<title>.: HOME :.</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
        <body
<h2>Bienvenido,<span><?php echo $_SESSION['user_id'];?> </span></h2>
<a href="php/cerrarsesion.php"class="btn btn-default" align="right">Cerrar sesiòn</a>
	</body>
</html>
