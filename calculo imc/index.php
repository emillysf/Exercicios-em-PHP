<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule seu IMC</title>
</head>
<body>
    <h1>Calcule seu IMC</h1>

<div class="formu"> 
    <form name="FormTest" method="POST">
        <label>Digite seu nome: </label><br>
        <input type="text" name="nome" placeholder="Nome" id="inp-text"><br>
        <label>Digite seu ano de nascimento:</label><br>
        <input type="text" name="datanas" placeholder="Ano de nascimento" id="inp-text"><br>
        <label>Digite sua altura: </label><br>
        <input type="number" name="altura" placeholder="Altura em metros" id="inp-text" step="0.01"><br>
        <label>Digite seu peso: </label><br>
        <input type="number" name="peso" placeholder="Peso" id="inp-text" step="0.01"><br>

        <input type="submit" name="calcular" id="bnt-calcular" value="Calcular"><br>

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
                height: 400px;
                border-radius: 15%;
                text-align: center;
                margin: 0 auto;
                
            }
            
        </style>

        <?php

        $nome;
        $datanas;
        $idade;
        $altura;
        $peso;
        $imc;
        $class;

        if(isset($_POST["calcular"])){
            $nome= $_POST["nome"];
            $datanas= $_POST["datanas"];
            $altura= $_POST["altura"];
            $peso= $_POST["peso"];

            $idade = date("Y")-$datanas;
            $imc = $peso/($altura*$altura);

            if($imc<18.5){
                $class = "baixo peso";
            }else if($imc>18.5 && $imc<=24.9){
                $class = "peso ideal";
            }else if($imc>=25 && $imc<=29.9){
                $class = "sobrepeso";
            }else if($imc>30){
                $class = "obesidade";
            }
            
            echo "Olá! $nome, 
            você tem $idade anos, seu IMC é ".number_format((float)$imc,2,',','.'), "  e trata-se de $class!";
        }
        ?>
    </form>
</div>

    
</body>
</html>