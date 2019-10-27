<!--Programa en PHP que me permite establecer la conexiòn a la base de datos-David Orozco-->

<?php
$host="localhost";
$user="root";
$password="";
$db="pruebacrud";
//$db="sociedad++";
$con = new mysqli($host,$user,$password,$db);
?>