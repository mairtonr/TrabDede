<?php 

$server = "localhost";
$user = "root";
$password = "";
$bd = "trabalho_dede";

$conexaobd = mysqli_connect($server, $user, $password, $bd);

if (!$conexaobd) {
    echo "not connected";
}



?>