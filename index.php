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
            padding: 2%;
            display:flex;
            justify-content: center;
            text-align:center;
            

         
        }

        .convite{
            margin-top: 16%;
            margin-right:13%;
        }
        .convite img{
            position: absolute;
            transform: rotate(-7deg);
            border-radius: 10px;
            left:17%;
            z-index: 2;
        
        }

        .confirmacao{
            background-color: rgba(252, 251, 251, 0.589);
            width: 40%;
            height: 100%;
            padding: 15px; 
            border-radius: 15px;
            margin-top:15%;
            font-family: 'Poppins', sans-serif;
            z-index: 1;
            backdrop-filter: blur(1.6px);
    
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

        .texto label{
            font-size: 1.2rem ;
        }
        .texto h2, label{
            color: rgb(75, 63, 67);
        }

        .texto .botao{
            width: 20%;
            padding: 7px;
           margin-top: 1%;
            border-radius: 7px;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            font-size: 15px;
          background: #709775;
          color:white;
        }
        .texto .botao:hover{
          background: #415d43;
          transition: ease-in 600ms;
          color: white;
        }

        a{
            font-size:1rem;
            color: rgb(75, 63, 67);
            font-weight :600;
            position: relative;
        }

        a::after{
    content: " ";
    width: 0%;
    height: 3px;
    background: rgb(75, 63, 67);;
    position: absolute;
    bottom: 0;
    left: 0;
    transition: 0.5s ease;
    
}


a:hover::after{
  width: 100%;
    
}

.alerta{
    position: absolute;
    background:rgba(255, 255, 255, 0.699);
    padding:15px;
    backdrop-filter: blur(2px);
    font-size:20px;
    border-radius:10px;
    font-family: 'Poppins', sans-serif;
    color: rgb(75, 63, 67);
    font-weight :600;
}



    </style>
</head>
<body>

<section class="convite">
<img src="img/convite.png" width="230px" alt="">
</section>
<div class="confirmacao">


    <form class="texto" method="post" action="">
        <h2>
            Confirme sua presença em nossa cerimônia!
        </h2>
        
        <label>Digite seu nome:</label>
        <input type="text" placeholder="Ex: Maria" name="nome" maxlength="50">
        <label>Digite seu sobrenome:</label>
        <input type="text" placeholder="Ex: Lima" name="sobrenome" maxlength="60">
        <label>Digite seu RG:</label>
<input type="text" placeholder="Ex: 12.345.678-9" name="rg" id="rg"
maxlength="12" >


        <input class="botao" type="submit" value="Enviar">
        <a href="confirmados.php">Confirmados</a>
        </form>

</div>

    
    <?php

    //conectar com o banco de dados
     $conn = mysqli_connect("localhost", "id20736486_admin", "Admin@123", "id20736486_banco");


    if($_SERVER["REQUEST_METHOD"] == "POST"){
       $nomes = $_POST['nome'];
       $sobrenomes = $_POST['sobrenome'];
        $rgs = $_POST['rg'];
        //CRIA OS VALORES SQL PARA INSERIR UM REGISTRO NA TABELA

        $sql = "INSERT INTO nomes(nome, sobrenome, rg) VALUES ('$nomes', '$sobrenomes', '$rgs')";

        if(mysqli_query($conn, $sql)){
            echo'<div class="alerta">';
            echo 'Registro inserido com sucesso';
            echo'</div>';
        }else{
            
            echo'<div class="alerta">';
            echo '<script>alert("Erro ao inserir registro");</script>';
            echo'</div>';
        }

     }
     
    
    ?>

<script>
  function formatarRG(rg) {
    let rgTamanho = rg.value.length
    let codigoTecla = event.keyCode;

    // Verifica se a tecla pressionada é um número (0-9)
    if (codigoTecla >= 48 && codigoTecla <= 57) {
        if (rgTamanho === 2 || rgTamanho === 6) {
            rg.value += '.'
        } else if (rgTamanho === 10) {
            rg.value += '-'
        }
    } else {
        event.preventDefault(); // Impede o comportamento padrao
    }
}

const rg = document.querySelector('#rg')
rg.addEventListener('keypress', () => {
    formatarRG(rg);
});
</script>
</body>
</html> 
