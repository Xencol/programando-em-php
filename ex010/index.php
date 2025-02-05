<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>

<?php 
$quebra = "<br></br>";

//Criação de array indexado

$array = [10,20,30,40];

//exibindo o array

echo "Array original: ";
print_r($array); //print_r() exibe o array de forma legível

echo "<br>";
echo "<br>";

//adicionado um valor final ao array

$array[] = 50;

//Exibindo o array atualizado

print_r($array);

echo "<br>";
echo "<br>";

//Alterando o valor na posição 1 para 25

$array[1] = 25;

echo " Array após alterar o valor na posição 1 para 25:";

echo "<br>";
echo "<br>";

print_r($array);

echo "<br>";
echo "<br>";

//Removendo o valor no indice 2
unset($array[2]);

//Reorganizando os indicies do array
$array = array_values($array);

//Exibindo o array após remover o indice

echo "Array apos remover o valor no indicie 2.";

echo "<br>";
echo "<br>";

print_r($array);

//reorganizando os indices do array

$array = array_values($array);

echo "<br>";
echo "<br>";

//Exibindo o array após remover o indice e reorganizar

echo "Array após reorganizar os elementos:" . $quebra;

print_r($array);

echo "<br>";
echo "<br>";

$array[] = 19;

//ordenando o array de forma crescente

sort($array);

//Exibindo o array ordenado 

echo "Array após ordenar os valores:". $quebra;

print_r($array);

?>
    
</body>
</html>