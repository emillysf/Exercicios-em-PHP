<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Fatorial</title>
</head>
<body>
<div class="formu"> 
    <form name="FormTest" method="POST">
        <br>
        <label>Digite um número: </label><br>
        <input type="Number" name="num" placeholder="Nome" id="inp-text"><br>
        
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

        $num;
        $num2;
        $result;

        if (isset($_POST["num"])){
            $num = $_POST["num"];
            $num2 = $_POST["num"];
            $result = 1;
            while ($num > 1){
                $result*= $num;
                $num--;
            }
        }
        echo $result 
        ?>
    </form>
</div>
</body>
</html>