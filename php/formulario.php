<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from personas where id = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?>

<?php if($person!=null):?>

<form role="form" method="post" action="php/actualizar.php">
    <div class="form-group">
    Cambie el tipo de Persona(opcional):
     <!--<select id="tipo_per" name="tipo_per">
            <option value="Natural">Natural</option>
          <option value="Jurìdica">Jurìdica</option>
   </select> -->
   <input type="radio"id="tipo_per" name="tipo_per" onChange="mostrar(this.value)" value="Natural" >Natural
   <input type="radio"id="tipo_per" name="tipo_per" onChange="mostrar(this.value)" value="Jurìdica">Jurìdica
      </div>
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $person->nombre; ?>" name="name" required>
  </div>
  <div class="form-group">
    <label for="lastname">Apellido</label>
    <input type="text" class="form-control" value="<?php echo $person->apellido; ?>" name="lastname" required>
  </div>
      <div class="form-group">
    <label for="lastname">Identificaciòn</label>
    <input type="text" class="form-control" value="<?php echo $person->identificacion; ?>" name="identif" required>
  </div>
  <div class="form-group">
    <label for="address">Domicilio</label>
    <input type="text" class="form-control" value="<?php echo $person->direccion; ?>" name="address" required>
  </div>
  <div class="form-group">
    <label for="phone">Telefono Fijo</label>
    <input type="text" class="form-control" value="<?php echo $person->telefono; ?>" name="phone" >
  </div>
     <div class="form-group">
    <label for="phone">Telefono Celular</label>
    <input type="text" class="form-control" value="<?php echo $person->celular; ?>" name="cell" >
  </div>
      <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" value="<?php echo $person->email; ?>" name="email" >
  </div>
      <div class="form-group">
    <label for="email2">Email Alterno</label>
    <input type="email" class="form-control" value="<?php echo $person->email2; ?>" name="email2" >
  </div>
<input type="hidden" name="id" value="<?php echo $person->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
  <a href="ver.php"class="btn btn-default" align="right">Cancelar</a>

</form>


<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>