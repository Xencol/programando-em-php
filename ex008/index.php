<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional If, Else e Elseif</title>
</head>
<body>

    <?php 
    //Condicional If----------------------------------

 if(1 < 2){echo "O número 1 é menor. <br>";}

 $idade = 18;
   
 if($idade >= 18){echo "Você é maior de idade. <br>";}

    //Condicional Else -------------------------------

    $a = 10;
    $b = 14;

    if($a = $b) {echo "As variáveis são iguais .";} 
    
    else {echo "As variáveis são diferentes.";}

    //Condicional Elseif

    $idadepessoa = 25;

    if($idadepessoa < 13 )
    {echo "Você é uma criança.";}

    else if ($idadepessoa >= 13 && $idadepessoa <= 19)
    {echo "Você é um adolecente";}
    
    else if ($idadepessoa >= 20 && $idadepessoa <=59)
    {echo "Você é um adulto";}

    else 
    {echo "Você é um idoso";}

    ?>

    
</body>
</html>