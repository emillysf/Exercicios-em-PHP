<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="Exercicios/conversão monetaria/style.css"/>
    <title>Conversão monetária</title>
</head>
<body>
    <h1 class= title>Conversor de moedas</h1>
<div class="formu">   
    <form name="FormTest" method="POST">
        <label>Cotação do dia: </label><br>
        <input type="number" name="cotacao" placeholder="Digite cotacao" id="inp-text"><br>
        <label>Valor:</label><br>
        <input type="number" name="valor" placeholder="Digite valor" id="inp-text"><br>

        <input type="submit" name="dolareal" id="bnt-dolareal" value="Dolar para Real" class="bnt1">
        <input type="submit" name="realdolar" id="bnt-realdolar" value="Real para Dolar" class="bnt1"><br>

        <style type="text/css">
            h1{
                text-align:center;
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
            .bnt1{
                width: 30%;
                height: 30%;
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
        $cotacao;
        $valor;
        $conversao;

        if(isset ($_POST["dolareal"])){

            $cotacao = $_POST["cotacao"];
            $valor = $_POST["valor"];
            $conversao = $valor*$cotacao;
            

            echo "<br> $ $valor convertido em real é R$ $conversao";
        }else if(isset($_POST["realdolar"])){
            $cotacao = $_POST["cotacao"];
            $valor = $_POST["valor"];

            $conversao = $valor*$cotacao;

            echo "<br><br> R$ $valor convertido em dolar é $ $conversao";
        }
        ?>
    </form>
    </div> 
    
</body>
</html>