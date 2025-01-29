<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadodores aritimeticos</title>
</head>
<body>
    <h1>Operadores aritimeticos</h1>
   <p>
   <?php 
    
    $soma = 20 + 20;
    $subtração = 100 - 25;
    $divisão = 5 / 2;
    $resto = 5 % 2;
    $multiplicacao = 5 * 10;
    $potenciacao = 8 ** 3;

   

   

    echo "resultado da soma é $soma <br>";
    echo "resultado da subtração é $subtração <br>";
    echo "resultado da divisão é $divisão <br>";
    echo "resultado do resto é $resto <br>";
    echo "resultado da multiplicacao é $multiplicacao <br>";
    echo "resultado da potenciacao é $potenciacao <br>";
   
     //primeira expressão: (3 + 2) * 4

     $valor1 = (3 + 2) * 4;
     
     $a = 3;
     $b = 2;
     $c = 4;

     $calculo = ($a + $b) * $c;

     //segunda expresão: (2 * (2 + (2 -1))) + 8;
     
     $valor2 = (2 * (2 + (2 -1))) + 8 * 2;


    //exibindo contatenação

    echo " resultado da primeira expressão: " . $valor1 . "<br>";
    echo " resultado da seunda expressão: " . $valor2 . "<br>";
    echo "resultado do cáulculo da variáveis: " .$calculo . "<br>";


    /*Ordem de grandeza
    primeiro = () parênteses

    fora dos parênteses segue a linha abaixo

    segundo = potenciacao
    terceiro = multiplicação
    quarto = divisão
    quinto = soma
    sexto = subtração
    */
   
   
   ?>
     </p>
</body>
</html>