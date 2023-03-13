<?php 

require_once("Dado.class.php");
class DadoR{
    private $dado;

    public function __construct(){
        $dado = new Dado();

        $dado->setNome($_POST['nome']);
        echo $dado->getNome();
    }

    public function __construct(){
        $dado = new Dado();

        $dado->set($_POST['telefone']);
        echo $dado->getTelefone();
    }
}new DadoR()
?>