<?php 

class Gerente extends Funcionario{
    public $setor;
 
    public function cadastrar(){
        echo"<h1>Gerente</h1> <br>";
        echo "Setor:".$_POST["setor"]."<br>";

    }
}


?>
