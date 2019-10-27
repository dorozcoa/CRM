<?php
session_start();
session_destroy();
print "<script>alert(\"Has salido de la sesiòn correctamente.\");window.location='../login.php';</script>";
?>