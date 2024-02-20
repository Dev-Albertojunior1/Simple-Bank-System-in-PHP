<?php

class pessoa{

    public $nome;

    public $idade;


    public function __construct($nome, $idade){

        $this->nome = $nome;

        $this->idade = $idade;

    }

    public function print(){
        echo $this -> nome ;
        echo $this -> idade;
    }

}

$pessoa = new pessoa('Alberto' ,  ' 20' );
$pessoa -> print();

$pessoa2 = new pessoa('Junior' , ' 19');

$pessoa2 -> print();


?>