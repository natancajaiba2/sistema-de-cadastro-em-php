<?php 
class Cliente extends Pessoa{
    public $tipo;
    protected $endereco;

    public  function cadastrar(){
        echo"<h1>Cliente</h1> <br>";
        echo "Tipo de cliente: ".$_POST["tipo"]."<br>";
        echo "Endereço: ".$_POST["endereco"]."<br>";
    
    }

}


?>