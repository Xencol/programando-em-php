<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de atribuição</title>
</head>
<body>
    <h2>Operadores de atribuição</h2>
   
   <?php 
     //string
    
     $rua = "Rua do Amador Bueno";

     //Atribuição com contatenação

     $rua .= " na cidade de São Paulo";
    //float

    $preco = 2.45;

    //Atribuição de soma

    $preco += 2.30;

    //Atribuição de subtração

    $preco -= 1.30;

    //formatar o numero para usar virula como separador decimal

    $preco_formatado = number_format ($preco, 2, ',' , '.');

    //exibe o resultado - por interpolação

    echo "$rua, <br> Preço r$ $preco_formatado";

    ?>
</body>
</html>