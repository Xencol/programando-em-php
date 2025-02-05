<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Criando um array associativo
    $associativo =
    ["nome" => "João",
     "idade" => 30,
     "Cidade" => "São Paulo"];

    //Exibindo o array associativo

    print_r($associativo);
    print_r($associativo["nome"]); //acessando João


    echo "<br><br>";

    //Acessando primeiro valor

    $primeiroValor = reset($associativo);

    echo $primeiroValor;
    
    echo "<br><br>";

    //Criando uma array multidirecional

    $multidirecional = 
    [
        [1,2,3], //0
        [4,5,6], //1
        [7,8,9]  //2
    ];

    //exibindo o valor na posição [1] [2] (4, 5, 6) -> 3

    echo "valor na posção [1] [2]: " . $multidirecional [1][2];

    echo "<br>";

    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];

    //Mesclando o array 

    $novo_array = array_merge($array1, $array2);

    echo "<br><br>";

    //Exibindo array resulante

    echo "Array mesclado";

    echo "<br><br>";

    print_r($novo_array);

    echo "<br><br>";

    $array = [10, 20, 30, 40];

    //procurando o valor 30 no array

    $indice = array_search(30, $array);

    //exibindo o indicie onde o valor foi encontrado

    echo "o índcie do valor 30 é ". $indice;

    echo "<br><br>";

    $existe = in_array(25, $array);

    //Exibindo se o valor existe ou não

    if($existe)
    {echo "O valor está na lista.";}
 else
    {echo "o valor não está na lista";}

    //Matriz 3x2

    $matriz = [

        [1,2], // Primeira linha
        [4,5], // Segunda linha
        [7,8]  // Terceira linha

    ];

    echo "<br><br>";

    // cessando elementos da matriz

    echo "Elemento na posição [0][1]:" . $matriz[0][1] . "<br><br>";
    echo "Elemento na posição [2][0]:" . $matriz[2][0] . "<br><br>";

    ?>
</body>
</html>