<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Polimorfismo</title>
</head>
<body>

<?php
    //superclasse  

    class Animal{

    public function fazerSom(){
        return "O animal faz um som.";
    }
}
    //subclasse
    class Cachorro extends Animal{

        public function fazerSom(){
            return "Au au au au.";
        }
    }

    //subclasse

    class Gato extends Animal{

        public function fazerSom(){
            return "Miau miau miau.";
        }
    }

    //Função que utiliza polimorfismo

    function emitirSomAnial(Animal $animal){
        echo $animal->fazerSom() . "<br><br>";
    }

    //criando objetos

    $cachorro1 = new Cachorro(null);
    $gato1 = new Gato(null);

    //chamando a função

    //emitirSomAnial($cachorro1); -> Possivel opção

    echo $cachorro1->fazerSom() . "<br><br>";
    echo $gato1->fazerSom() . "<br><br>";

?>
    
</body>
</html>