<!--Programa en PHP que me permite agregar cuantos registros quiera a partir de las tablas y conexiones
establecidas en la base de datos-David Orozco-->
<?php

if(!empty($_POST)){
	if(isset($_POST["name"])&&isset($_POST["tipo_per"]) &&isset($_POST["lastname"]) &&isset($_POST["email"]) &&isset($_POST["address"]) &&isset($_POST["phone"])&&isset($_POST["email2"])&&isset($_POST["cell"])&&isset($_POST["identif"])){
		if($_POST["name"]!=""&& $_POST["lastname"]!=""&&$_POST["address"]!=""){
			include "conexion.php";
			$sql = "insert into personas(nombre,tipo_persona,apellido,identificacion,email,direccion,telefono,celular,email2,created_at) value (\"$_POST[name]\",\"$_POST[tipo_per]\",\"$_POST[lastname]\",\"$_POST[identif]\",\"$_POST[email]\",\"$_POST[address]\",\"$_POST[phone]\",\"$_POST[cell]\",\"$_POST[email2]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";

			}
		}
	}
}

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["fullname"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
		if($_POST["username"]!=""&& $_POST["fullname"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from user where username=\"$_POST[username]\" or email=\"$_POST[email]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../register.php';</script>";
			}
			$sql = "insert into user(username,fullname,email,password,created_at) value (\"$_POST[username]\",\"$_POST[fullname]\",\"$_POST[email]\",\"$_POST[password]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. Proceda a iniciar sesiòn\");window.location='../login.php';</script>";
			}
		}
	}
}
?>