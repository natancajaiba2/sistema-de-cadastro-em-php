<?php
class Funcionario extends Pessoa{
    protected $cep;
    public $cargo;
    public $turno;
    protected $registro;
    protected $dataNasc;
    public $tipoContrato;
    protected $salario;

    public function cadastrar(){
        echo"<h1>Funcionario</h1> <br>";
        echo "CEP: ".$_POST["cep"]."<br>";
        echo "Cargo: ".$_POST["cargo"]."<br>";
        echo "Turno: ". $_POST["turno"]."<br>";
        echo "Registro: ".$_POST["registro"]."<br>";
        echo "Data de nascimento: ".$_POST["dataNasc"]."<br>";
        echo "Tipo de contrato:".$_POST["tipoContrato"]."<br>";
        echo "Salario: ".$_POST["salario"]."<br>";
        
    }
}

?>