<!--Programa en PHP que me permite consultar los registros existentes en las tablas base de datos, mediante filtros de
bùsqueda especificos-David Orozco-->

<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from personas where nombre like '%$_GET[s]%'or identificacion like '%$_GET[s]%' or apellido like '%$_GET[s]%' or direccion like '%$_GET[s]%' or email like '%$_GET[s]%' or telefono like '%$_GET[s]%'";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Id</th>
        <th>Nombre</th>
	<th>Apellido</th>
      <th>Identificacion</th>
        <th>Tipo de Persona</th>
	<th>Email</th>
	<th>Direccion</th>
	<th>Telefono</th>
	<th>Opciones</th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["id"];?></td>
        <td><?php echo $r["nombre"];?></td>
	<td><?php echo $r["apellido"]; ?></td>
        <td><?php echo $r["identificacion"]; ?></td>
         <td><?php echo $r["tipo_persona"];?></td>
	<td><?php echo $r["email"]; ?></td>
	<td><?php echo $r["direccion"]; ?></td>
	<td><?php echo $r["telefono"]; ?></td>
	<td style="width:150px;">
		<a href="./editar.php?id=<?php echo $r["id"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $request["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminar.php?id="+<?php echo $request["id"];?>;

			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
