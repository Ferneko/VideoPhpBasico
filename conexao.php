<?php 

$servidor="localhost";
$username="root";
$password="";
$dbname="videoaula";

$conn = mysqli_connect($servidor,$username, $password) or die ("Não foi possivel conectar");
mysqli_select_db($conn,$dbname);

?>