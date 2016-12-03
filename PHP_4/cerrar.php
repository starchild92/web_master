<?php 

session_start();
session_destroy();
unset($_SESSION['logeado']);
header ("location:index.php?pag=productos");

?>