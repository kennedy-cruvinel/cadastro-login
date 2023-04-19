<?php

if(isset($_POST['submit']))
{
    //print_r( ' Nome:'. $_POST['nome']);
    //print" <br>";
    //print_r('Email: '.$_POST['email']);
    //print" <br>";
    //print_r('Telefone: '. $_POST['telefone']);
    //print"<br> ";
    //print_r('Sexo: '. $_POST['genero']);
    //print" <br>";
    //print_r('Data de nascimento: '. $_POST['data_nascimento']);
    //print" <br>";
   // print_r('Estado: '. $_POST['estado']);
    //print" <br>";
    //print_r('Endereço'. $_POST['endereco']);
    //print" <br>";
    

    include_once("config.php");
    $nome=$_POST['nome'];
    $senha=$_POST['senha'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $sexo=$_POST['genero'];
    $data_nasc=$_POST['data_nascimento'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $endereco=$_POST['endereco'];

    $result=mysqli_query($conexao,"INSERT INTO usuarios (nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco)
    VALUES('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulário</title>

    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(290deg, #000000,#892cdc);
            
        }

        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: #000000;
            padding: 15px;
            border-radius: 20px;
            color: white;
            width: 20%;
        }

        fieldset{
            border: 3px solid #892cdc;
            border-radius: 20px;
        }
        legend{
            border: 1px solid #892cdc;
            padding: 15px;
            text-align: center;
            background-color:#892cdc ;
            border-radius: 10px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid rgb(255, 255, 255);
            outline: none;
            width: 100%;
            letter-spacing: 2px;
            color: white;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: 0.3s;;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput{ /* quando der o foco vai executar algo*/
font-size: 12px;
top: -20px;
color: #892cdc;
        }


        #data_nascimento{

            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
         
        }

        #submit:hover{

            background-image: linear-gradient(165deg, #000000,#892cdc);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 18px;
            border-radius: 15px;
            
        }
        #submit{
            background-image: linear-gradient(290deg, #000000,#892cdc);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 18px;
            border-radius: 15px;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <a href="home.php">VOLTAR</a>
    <div class="box">
<form action="formulario.php"method="POST">
<fieldset> <!-- usado para agrupar elementos-->
    <legend>
        <b>Formulário de Clientes</b>   
    </legend>
<br>
<div class="inputBox"> 

    <input type="text" name="nome" id="nome" class="inputUser" required>
    <label for="nome" class="labelInput"> Nome completo</label>
</div><br><br>


<div class="inputBox"> 

    <input type="password" name="senha" id="senha" class="inputUser" required>
    <label for="senha" class="labelInput"> Senha </label>
</div><br><br>



<div class="inputBox"> 

    <input type="text" name="email" id="email" class="inputUser" required>
    <label for="nome"class="labelInput"> Email</label>
</div><br><br>


<div class="inputBox"> 

    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
    <label for="nome"class="labelInput"> Telefone</label> <!-- label for serve para aumentar a area de contato do click-->
</div><br><br>

<p>sexo</p>
<input type="radio" name="genero" id ="feminino"value="feminino" required>
<label for="feminino">Feminino</label><br>

<input type="radio" name="genero" id ="masculino"value="masculino" required>
<label for="masculino">Masculino</label><br>


<input type="radio" name="genero" id ="outro"value="outro" required>
<label for="outro">Outro</label><br><br>

<div class="inputBox"> 
    <label for="data_nascimento"class="labelInput">   <b>Data de Nascimento</b> </label>
    <br>
    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>

</div><br><br>
<div class="inputBox"> 

    <input type="text" name="cidade" id="cidade" class="inputUser" required>
    <label for="cidade"class="labelInput"> Cidade</label> <!-- label for serve para aumentar a area de contato do click-->
</div><br><br>
<div class="inputBox"> 

    <input type="text" name="estado" id="estado" class="inputUser" required>
    <label for="estado"class="labelInput"> Estado</label> <!-- label for serve para aumentar a area de contato do click-->
</div><br><br>


<div class="inputBox"> 

    <input type="text" name="endereco" id="endereco" class="inputUser" required>
    <label for="endereco"class="labelInput"> Endereço</label> <!-- label for serve para aumentar a area de contato do click-->
</div><br><br>
<input type="submit" name="submit" id="submit">

</fieldset>
</form>
    </div>
    
</body>
</html>