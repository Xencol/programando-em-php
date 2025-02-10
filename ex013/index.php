<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For e Foreach</title>
</head>
<body>
    
<?php

echo "<br>For<br><br>";

//For

for ($i = 1; $i <= 5; $i++){

    echo $i. "<br><br>";
}

for ($a = 1; $a <= 5; $a++){
    
    echo  "O quadrado de $a é " . ($a * $a) ."<br><br>";
}

echo "<br><br>Foreach<br><br>";

$frutas =["Maçã", "Banana", "Laranja", "Uva"];

    foreach ($frutas as $frutas){

            echo $frutas . "<br><br>";
    }

    echo "<br><br>";

    $idades = ["João"  => 25,
               "Maria" => 30,
               "Pedro" => 22
];

    foreach ($idades as $nome => $idade){
            echo "$nome tem $idade anos. <br><br>";

    }


?>

</body>
</html>