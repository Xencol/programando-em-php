<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de variaveis</title>
</head>
<body>
    <h2>
    <?php
    //variavel do tipo string
    
    $sobrenome = "Bastos";

    //variavel do tipo int
    
    $idade =  16;

    //variavel do tipo float

    $peso =  97;

    //variavel do tipo boolean (verdadeiro ou falso)

    $casado = false;

    echo "$sobrenome $idade $peso";
    
    //Metodo 1: usando var_dump para exibir o valor booleano 
    
    

    echo ($casado ? " Casado " : " Não é casado "); //exibe 'bool(false)'

    ?>
    </h2>
    
</body>
</html>
