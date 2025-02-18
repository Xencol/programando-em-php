    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Herança</title>
    </head>
    <body>
        <?php
        
    //casse base

      class Animal{

    //propriedade ou atributo

        public $nome;


    //metodo    
    
    public function __construct($nome){
        $this -> nome =$nome; }
      
      
    Public function falar(){
        echo " O animal faz um som ";}

    }

    //Subclasse 

    class Cachorro extends Animal{

        //sobrescrevendo o metodo falar

        public function falar(){
            return " O cachorro late. ";
        }

    }

    //Criando um objeto da classe cachorro

    $cachorro = new Cachorro("Rex");

    //exibindo o nome do cachorro

    echo $cachorro->nome . "<br>";

    //Chamando metodo sobrescrito da subclasse
    
    echo $cachorro->falar();

    //Mostrando o metodo falar da classe base

    $animal = new Animal("Animal");
    echo $animal->falar();

?>
    </body>
    </html>