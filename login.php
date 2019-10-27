<?php session_start(); ?>
<html>
	<head>
		<title>Inicio de sesiòn</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/banner.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Inicio de sesiòn</h2>

		<form role="form" name="login" action="php/sesion.php" method="post">
		  <div class="form-group">
		    <label for="username">Nombre de usuario o email</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		  </div>

		  <button type="submit" class="btn btn-default">Acceder</button>
                  <p class="regtext">No estas registrado? <a href="register.php" class="btn btn-default">Registrate Aquì­</a></p>
		</form>
</div>
</div>
</div>
		<script src="js/valida_login.js"></script>
	</body>
</html>