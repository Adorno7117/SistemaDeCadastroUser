<?php
require_once("config.php");


$_SESSION['user'] = $_POST["user"];
$_SESSION['senha'] = $_POST["senha"];

if($_SESSION['user']== 'admin' && $_SESSION['senha'] == "12345" ){
    header("Location: loja.php");
    exit;
}

    
else{
 echo "Erro!!";
}
    
?>