<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de LOGIN</title>

    <Style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(290deg, #000000,#892cdc);
        }
        .tela-login{
           background-color: #000000;
           position: absolute;
           top: 50%;
           left: 50%;
           transform: translate(-50%,-50%);
           padding: 80px;
           border-radius: 30px;
           color: white;
           text-align: center;
        }

input{ padding: 15px;
    border: none;
    outline: none; /* tira o a marcação de campo marcado*/
    font-size: 15px;
    border-radius: 8px;

}

.inputSubmit{

    background-image: linear-gradient(165deg, #000000,#892cdc);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 18px;
            border-radius: 15px;
            cursor: pointer;
}


.inputSubmit:hover{
    background-image: linear-gradient(295deg, #000000,#892cdc);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 18px;
            border-radius: 15px;
   
    
}
    </Style>
</head>
<body>

<form action="testLogin.php"method="POST">
<a href="home.php">VOLTAR</a>
    <div class="tela-login">
    <h1>
        LOGIN
    </h1>



    <input type="text" placeholder="Digite seu email" id="" name="email">
    <br><br>
    <input type="password" name="senha" id="" placeholder="Digite sua Senha">
    <br><br>
    <input  class= "inputSubmit" type="submit" name="submit" value="Enviar">
    </form>
</div>


</body>
</html>