<?php
session_start();
//print_r($_SESSION);
if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha'])==true))
{
unset($_SESSION['email']);
unset($_SESSION['senha']);
    header ('Location: login.php');
}
$logado=$_SESSION['email'];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Conectado</title>

    <style>
body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(290deg, #000000,#892cdc);
        } 

        h1{
            align:center;
            color:white;
        }

    </style>
</head>
<body>
<div class="sairsa">
    <a href="login.php" class="btn btn-danger me-5">Sair</a>
    <?php
        echo "<h1> Bem vindo $logado</h1>";
    ?>

    

    </div>
</body>
</html>