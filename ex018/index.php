<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificaadores de acesso</title>
</head>
<body>
    <?php 
    
    class Funcionario{

        //propridades com diferentes modificadores de acesso

        public $nome; // pode ser acessado de qualquer lugar
        
        protected $salario;// pode ser acessado pela classe e suas filhas
        
        private $cpf; // só pode ser acessado pela classe

        public function __construct($nome, $salario, $cpf){

            $this->nome = $nome;
            $this->salario = $salario;
            $this->cpf = $cpf;
        }
                
        //Metodo publico para exibir o nome do funcionario

        public function exibirNome(){
            echo "Nome: $this->nome <br><br>";
        }

        //Metodo protegido para exibir o salario do funcionario

        protected function exibirSalario(){
            echo "Salário: R$ $this->salario <br><br>";

        }

        //Metodo privado para exibir o CPF do funcionario

        private function exibirCpf(){
            echo "CPF: $this->cpf <br><br>";
        }

    // Metodo publico para chamar o metodo protegido na propria classe

    public function exibirDetalhes(){
    $this->exibirNome();
    $this->exibirSalario();
    $this->exibirCpf();
}
    }

    //criando uma instancia da classe funcionario
    $funcionario1 = new Funcionario("Carlos Silva", 7000, "123.456.789-00");
 
    //acessando o nome diretamente (publico)
    $funcionario1->exibirNome();
 
    //acessando o salario diretamente (protegido)
   // $funcionario1->exibirSalario(); //comentado porque gera erro
 
   //acessando o cpf diretamente
   //$funcionario1->exibirCpf(); //comentado porque gera erro

   //acessando o metodo pubico que acesso todos os dados

    $funcionario1->exibirDetalhes();
    
    ?>
</body>
</html>