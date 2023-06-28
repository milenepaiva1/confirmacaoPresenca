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
            padding: 10%;
            display:flex;
            flex-direction:column;
            justify-content: center;
            align-items:center;
            

         
        }

   
        .confirmados{
            background-color: rgba(252, 251, 251, 0.589);
            width: 100%;
            max-width: 40%;
            height: 100%;
            padding: 15px; 
            border-radius: 15px;
            font-family: 'Poppins', sans-serif;    
            backdrop-filter: blur(1.6px);
            text-align: center;
            color: rgb(75, 63, 67);
            margin-bottom:15px;
    
        }

        .convidados     {
            background-color: rgba(252, 251, 251, 0.589);
            width: 100%;
            max-width: 40%;
            height: 100%;
            max-height:400px;
            padding: 15px; 
            font-size:1.2em;
            border-radius:10px;
            font-family: 'Poppins', sans-serif;    
            backdrop-filter: blur(1.6px);
            color: rgb(75, 63, 67);
            display:flex;
            text-align:center;
            flex-direction:column;
            overflow: auto;

    
        }

        .elementos{
            border-bottom:2px solid #4b3f43;
        }




    </style>
</head>
<body>


<div class="confirmados">
    <h2>Lista de convidados já confirmados</h2>
   
   
</div>

<div class="convidados">
<?php
    
    //Definir informações da conexão ao banco de dados

    $servidor = "localhost";
    $usuario = "id20736486_admin";
    $senha = "Admin@123";
    $dbnome = "id20736486_banco";

    //Cria a conexão com o banco de dados

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbnome);

    //Definir a consulta SQL para selecionar os registros da tabela

    $result_tabela = "SELECT * FROM nomes";

    //Executa a consulta SQL e armazena  resultado em uma variavel
    $resultado_tabela = mysqli_query($conn, $result_tabela);

    //Percorre todos os registros retornando o valor do sql e imprime na página
    while($row_usuario = mysqli_fetch_assoc($resultado_tabela)){
        
       echo'<div class="elementos">';
        
        echo "<p>"."ID: " . $row_usuario['id'] . "</p>"   ;
        echo "<p>"."Nome: " . $row_usuario['nome'] ." " . $row_usuario['sobrenome'] . "</p>" ;
       // echo "<p>"."Sobrenome: " . $row_usuario['sobrenome'] . "</p>";
        echo "<p>"."RG: " . $row_usuario['rg'] . "</p>";
        
       echo '</div>';
    }
    ?>

</div>

</body>
</html> 
