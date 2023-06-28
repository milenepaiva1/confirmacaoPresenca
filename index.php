<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação- Casamento</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        *{
            padding: 0;
            border: none;
            margin:0;
            text-decoration:none;
        }

        body{
           
            background: url("img/cerimonia.jpg");
            background-repeat: no-repeat;
            background-position: center;
            padding: 10px;
            display:flex;
            justify-content: center;
            

         
        }

        .convite{
            margin-top: 16%;
        }
        .convite img{
            transform: rotate(-7deg);
            border-radius: 10px;
        
        }

        .confirmacao{
            background-color: rgba(252, 251, 251, 0.589);
            margin-top: 15%;
            width: 40%;
            height: 100%;
            padding: 15px; 
            border-radius: 15px;
            font-family: 'Poppins', sans-serif;
            margin-right: 5%;     
            backdrop-filter: blur(4.2px);
    
        }

        .texto{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-size: 1.3rem;
          
        }

        .texto input{
            width: 80%;
            border-radius: 7px;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.699);
        }

        .texto label, a{
            font-size: 1.2rem ;
        }
        .texto h2, label{
            color: rgb(75, 63, 67);
        }

        .texto .botao{
            width: 20%;
            padding: 10px;
           margin-top: 1%;
            border-radius: 7px;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            font-size: 15px;
        }
        .texto button:hover{
          background: rgb(75, 63, 67);
          transition: ease-in 1s;
          color: white;
        }



    </style>
</head>
<body>

<section class="convite">
<img src="img/convite.png" width="230px" alt="">
</section>
<div class="confirmacao">

<div class="texto">
<form method="post" action="">
    <h2>
        Confirme sua presença em nossa cerimônia!
    </h2>
        
    <label>Digite seu nome:</label>
    <input type="text" placeholder="Ex: Maria" name="nome">
    <label>Digite seu sobrenome:</label>
    <input type="text" placeholder="Ex: Lima" name="sobrenome">
    <label>Digite seu RG:</label>
    <input type="text" placeholder="Ex: 12.345.678-90" name="rg">

    <input class="botao" type="submit" value="Enviar">
        <a href="confirmados.php">Confirmados</a>
        </form>
</div>

</div>

    
    <?php

    //conectar com o banco de dados
      $conn = mysqli_connect("localhost", "root", "", "banco-convidados");


      if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nomes = $_POST['nome'];
        $sobrenomes = $_POST['sobrenome'];
        $rgs = $_POST['rg'];
        //CRIA OS VALORES SQL PARA INSERIR UM REGISTRO NA TABELA

        $sql = "INSERT INTO nomes(nome, sobrenome, rg) VALUES ('$nomes', '$sobrenomes', '$rgs')";

        if(mysqli_query($conn, $sql)){
           echo "Registro inserido com sucesso";
        }else{
            echo "Erro ao inserir registro ";
        }

      }
    
    ?>
</body>
</html> 