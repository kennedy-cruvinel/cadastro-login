<?php
session_start();
//print_r($_REQUEST); // na tela do login o action esta apontando para ca
//então o Request vai pegar os parametros do do submit e enviar para uma nova pagina 


if (isset($_POST['submit'])&& !empty($_POST['email']) && !empty($_POST['senha']))

{
    //empty fala que a variavel não pode ser vazia 
// se Exististir o submit, o login esta liberado
include_once("config.php");
$email=$_POST["email"];
$senha=$_POST["senha"];


$sql="SELECT*FROM usuarios WHERE email='$email' and senha= '$senha'";

//variavel sql conversa com o banco de dados onde vai ver se existe o que foi digitado no login com o que esta cadastrado no banco de dados 

$result=$conexao->query($sql);
//criamos a variavel result, onde ele chama a conexão feita no "config.php" parar lançar a nossa query/ variavel sql no banco de dados


if(mysqli_num_rows($result)<1){
    header ('Location: login.php');
   unset ($_SESSION['email']);
    unset($_SESSION['senha']);
// comando unset serve para destruir os dados
}
else{
    $_SESSION['email']=$email;
    $_SESSION['senha']=$senha;
    header ('Location: sistema.php');
}
}
else
{
// retorna pra o login
    header('Location:login.php');
    print "Email ou senha invalidos";
}

?>