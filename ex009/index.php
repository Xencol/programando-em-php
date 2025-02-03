<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional switch</title>
</head>
<body>
    
<?php

$quebra = "<br></br>";

//condicional switch

$fruta = "maçã";

switch ($fruta)

{case "banana"; echo "A fruta é uma banana!". $quebra; break;
 
 case "maçã"; echo "A fruta é uma maça!". $quebra; break;

 case "laranja"; echo "A fruta é uma laranja!". $quebra; break;

 default: echo "Fruta desconhecida". $quebra; break;
}

    $cor = "Verde";

    switch ($cor)

    {case "Vermelho";
     case "Laranja";
    
     echo "A cor é quante!". $quebra; break;

     case "Azul";
     case "Verde";

     echo "A cor é fria!". $quebra; break;
     
     default: echo "Cor desconhecida". $quebra; break;
    }

    $numero = 3;

    switch (true)

    {case (is_numeric($numero) && $numero < 5): echo "O número é menor a 5."; break;
     
    case ($numero == 5): echo "O número é igual a 5."; break;
     
    case ($numero > 5): echo "O número é maior a 5."; break;

    default : echo "Número não identificado!"; break;
    
    }


?>


</body>
</html>