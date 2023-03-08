<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular consumo de combustivel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 style="color:black;text-align:center;">Calcular consumo de combustivel </h1>

<div class="formu">
    <form name="FormTest" method="POST">
        <label>Digite o km atual: </label><br>
        <input type="number" name="kmatual" placeholder="Digite o km atual" id="inp-text"><br>
        <label>Digite o km Final:</label><br>
        <input type="number" name="kmfinal" placeholder="Digite o km Final" id="inp-text"><br>
        <label>Digite a quantidade de litros consumidos: </label><br>
        <input type="number" name="litros" placeholder="litros consumidos" id="inp-text"><br>

        <input type="submit" name="calcular" id="bnt-calcular" value="Calcular">

<!-- Estilização -->
        <style type="text/css">
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
         
<!-- Codigo PHP -->  
        <?php

    
        
        $kmatual;
        $kmfinal;
        $litros;
        $consumedio;

        if(isset ($_POST["calcular"])){
            $kmatual = $_POST["kmatual"];
            $kmfinal = $_POST["kmfinal"];
            $litros = $_POST["litros"];
            $consumedio = ($kmfinal-$kmatual)/$litros;

        echo "<br> O consumo médio de litros é $consumedio L/km";
        } 
        ?>
    </form>

</div>

</body>
</html>
