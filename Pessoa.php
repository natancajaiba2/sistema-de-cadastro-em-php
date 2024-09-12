<?php
class Pessoa{
    public $nome;
    protected $email;
    protected $cpf;
    protected $telefone;

    

    public function cadastrar(){
        echo "<h1>Pessoa</h1> <br>";
        echo "Nome: ".$_POST["nome"]."<br>";     
        echo "Email: ".$_POST["email"]."<br>";    
        echo "CPF: ".$_POST["cpf"]."<br>";
        echo "Telefone: ".$_POST["telefone"]."<br>";


    }
    
}



?>