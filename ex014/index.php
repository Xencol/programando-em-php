<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>

<?php

function saudacao(){
echo "ola´seja bem indo ao php";

}

saudacao(); //chamando a função


echo "<br><br>";

function somar($a, $b){

    return $a + $b;
}

echo "<br><br>";

$resultado1 = somar(8, -2);

echo "Resultado da soma: " . $resultado1; //Saída

echo "<br><br>";

function saudacaoPersonalizada($nome = "Visitante"){

    echo "Olá $nome! Bem-vindo ao PHP";
}

saudacaoPersonalizada(); //Chamada sem argumento, usa o valor padrão

echo "<br><br>";

saudacaoPersonalizada("Carlos") //Chamada com argumento


?>

    
</body>
</html>