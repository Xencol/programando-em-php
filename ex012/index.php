<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While e Do While</title>
</head>
<body>

<?php

//while

$i = 1;

while ($i <= 5 )
{ 
    echo $i . "<br>"; //imprime o valor de $i
    $i++; } //$i+1

    echo "<br><br>";
   
    //Mostra somente números pares

    $f = 2;

    while ($f <= 10 )
{ 
    echo $f . "<br>"; $f+= 2; } //incrementa 2 em 2

    echo "<br><br>";

    //Do While

    $g = 1;

    do
    {echo $g . "<br>"; $g++;} 
    
    while ($g <= 7);
    

?>
    
</body>
</html>