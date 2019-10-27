<!--Programa en PHP que me permite acutalizar culaquier registro existente a partir de las tablas y conexiones
establecidas en la base de datos-David Orozco-->

<?php

if(!empty($_POST)){
	if(isset($_POST["name"])&&isset($_POST["tipo_per"]) &&isset($_POST["lastname"]) &&isset($_POST["email"]) &&isset($_POST["address"]) &&isset($_POST["phone"])&&isset($_POST["email2"])&&isset($_POST["cell"])&&isset($_POST["identif"])){
		if($_POST["name"]!=""&& $_POST["lastname"]!=""&&$_POST["address"]!=""){
			include "conexion.php";
			
			$sql = "update personas set nombre=\"$_POST[name]\",apellido=\"$_POST[lastname]\",identificacion=\"$_POST[identif]\",email=\"$_POST[email]\",direccion=\"$_POST[address]\",telefono=\"$_POST[phone]\",email2=\"$_POST[email2]\",celular=\"$_POST[cell]\",tipo_persona=\"$_POST[tipo_per]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>