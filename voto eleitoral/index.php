<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Você pode votar?</title>
</head>
<body>
    <h1> Descubra se seu voto é obrigatório</h1>

    <div class="formu"> 
    <form name="FormTest" method="POST">
        <br>
        <label>Digite seu nome: </label><br>
        <input type="text" name="nome" placeholder="Nome" id="inp-text"><br>
        <label>Digite seu ano de nascimento:</label><br>
        <input type="text" name="datanas" placeholder="Ano de nascimento" id="inp-text"><br>
        
        <input type="submit" name="calcular" id="bnt-calcular" value="Calcular"><br><br>

        <style type="text/css">
            h1{
                text-align: center;
            }
            body{
                background-color: #BFACE2;
            }
            label{ 
                text-align: center;
                font-size: 20px;   
            }
            #inp-text{
                width: 30%;
	            margin: 0 auto;
	            padding: 10px;
	            border: none;
	            margin-bottom: 10px;
	            border-radius: 50px;
                margin-top: 10px;
                
            }
            #bnt-calcular{
                width: 20%;
                height: 10%;
                border: none;
                border-radius: 50px;
                
            }
            .formu{
                background-color: #655DBB;
                width: 400px;
                height: 250px;
                border-radius: 15%;
                text-align: center;
                margin: 0 auto;
                
            }
            
        </style>

        <?php

        $nome;
        $datanas;
        $idade;
        $voto;

        if(isset($_POST["calcular"])){
            $nome= $_POST["nome"];
            $datanas= $_POST["datanas"];

            $idade = date("Y")-$datanas;

            if($idade<16){
                $voto= "Não é Obrigatório";
            }else if($idade==16 && $idade<18 ){
                $voto= "Facultativo";
            }else if($idade>=18 && $idade<69){
                $voto= "Obrigatório";
            }else if($idade>=70){
                $voto= "Facultativo";
            }

            
            echo "Olá! $nome, seu voto é $voto";
        }
        ?>
    </form>
</div>
    
</body>
</html>