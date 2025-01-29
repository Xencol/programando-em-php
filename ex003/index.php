<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentário e Variavel dentro da variavels</title>
</head>
<body>
    <h2> variável dentro da variável </h2>
    <?php 
    //para comentari de uma linha eu uso o //
   
    /*
    eu uso para comentar varias linhas ao mesmo tempo
    */

        $nome = "Luis";
        $sobrenome = "Miguel";

    //Avariavel abaixo recebe uma interpolação
    
    $frase = "Seu nome é $nome e seu nome composto é $sobrenome";
   
    echo $frase;
    
    ?>
  

</body>
</html>