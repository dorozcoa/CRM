<!--Programa en PHP que me permite generar una grilla de las tablas existentes en la base de datos asi como los redireccionamientos
para modificar o eliminar registros-David Orozco-->

<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from personas order by 1 asc";

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
	<td><?php echo $r['id']; ?></td>
        <td><?php echo $r['nombre']; ?></td>
        <td><?php echo $r['apellido']; ?></td>
           <td><?php echo $r['identificacion']; ?></td>
        <td><?php echo $r["tipo_persona"];?></td>
	<td><?php echo $r["email"]; ?></td>
	<td><?php echo $r["direccion"]; ?></td>
	<td><?php echo $r["telefono"];?></td>
	<td style="width:150px;">
		<a href="./editar.php?id=<?php echo $r["id"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminar.php?id="+<?php echo $r["id"];?>;

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
        
        <ul clas="pager">
            <li><a href="#" class="btn btn-default">Previous</a></li>
            <li><a href="#" class="btn btn-default">Next</a></li>
        </ul>