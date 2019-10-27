<html>
	<head>
		<title>CRUD</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
                <script>
                function mostrar(id){
                    if(id === "Natural"){
                        $("#Natural").show();
                        $("#Jurìdica").hide();
                    }
                
                 if(id === "Jurìdica"){
                        $("#Natural").hide();
                        $("#Jurìdica").show();
                    }
                }                
                </script>
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>CONSULTAR REGISTROS</h2>
<!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar</a>
<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Insertar Registros</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="php/agregar.php">
    <div class="form-group">
   Seleccione tipo de Persona:
   <!--<select id="tipo_per" name="tipo_per" onChange="mostrar(this.value);">
            <option value="Natural">Natural</option>
          <option value="Jurìdica">Jurìdica</option>
   </select> --> 
   <br>
   <input type="radio"id="tipo_per" name="tipo_per" onChange="mostrar(this.value)" value="Natural" >Natural
   <input type="radio"id="tipo_per" name="tipo_per" onChange="mostrar(this.value)" value="Jurìdica">Jurìdica
    </div>
     <!-- /CAMPOS PARA PERSONA NATURAL -->
    <div id="Natural" class="element" style="display: none;">
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="name" required>
  </div>
  <div class="form-group">
    <label for="lastname">Apellido</label>
    <input type="text" class="form-control" name="lastname" required>
  </div>
         <div class="form-group">
    <label for="identif">Identificaciòn</label>
    <input type="text" class="form-control" name="identif" required>
  </div>
  <div class="form-group">
    <label for="address">Domicilio</label>
    <input type="text" class="form-control" name="address" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" >
  </div>
   <div class="form-group">
    <label for="phone">Telefono Fijo</label>
    <input type="text" class="form-control" name="phone" >
  </div>
        <div class="form-group">
    <label for="cell">Telefono Celular</label>
    <input type="text" class="form-control" name="cell" >
  </div> 
 <div class="form-group">
    <label for="email2">Email Alterno</label>
    <input type="email2" class="form-control" name="email2" >
  </div>
  <button type="submit" class="btn btn-default">Agregar</button>
</div>
</form>
</div>
 <div class="modal-body">
<form role="form" method="post" action="php/agregar.php">
   <!-- <div class="form-group">
    <!--Seleccione tipo de Persona:
    <select id="tipo_per" name="tipo_per" onChange="mostrar(this.value);">
            <option value="Natural">Natural</option>
          <option value="Jurìdica">Jurìdica</option>
   </select>  </div>
   Seleccione tipo de Persona:
   <!--<select id="tipo_per" name="tipo_per" onChange="mostrar(this.value);">
            <option value="Natural">Natural</option>
          <option value="Jurìdica">Jurìdica</option>
   </select> 
   <br>
   <input type="radio"id="tipo_per" name="tipo_per" onChange="mostrar(this.value)" value="Natural" >Natural
   <input type="radio"id="tipo_per" name="tipo_per" onChange="mostrar(this.value)" value="Jurìdica">Jurìdica
    </div>-->
     <!-- /CAMPOS PARA PERSONA JURIDICA -->
         <div id="Jurìdica" class="element" style="display: none;">
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="name" required>
  </div>
      <div class="form-group">
    <label for="lastname">Razòn Social</label>
    <input type="text" class="form-control" name="lastname" required>
  </div>    
 <div class="form-group">
    <label for="identif">Nit</label>
    <input type="text" class="form-control" name="identif" required>
  </div>
  <div class="form-group">
    <label for="address">Domicilio</label>
    <input type="text" class="form-control" name="address" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" >
  </div>
   <div class="form-group">
    <label for="phone">Telefono Fijo</label>
    <input type="text" class="form-control" name="phone" >
  </div>
        <div class="form-group">
    <label for="cell">Telefono Celular</label>
    <input type="text" class="form-control" name="cell" >
  </div> 
 <div class="form-group">
    <label for="email2">Email Alterno</label>
    <input type="email2" class="form-control" name="email2" >
  </div>
  <button type="submit" class="btn btn-default">Agregar</button>
         </div>
</form>
</div>
      </div>  <!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<?php include "php/tabla.php"; ?>
</div>
</div>
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>