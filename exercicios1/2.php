<?php

class Veiculo{
    private $capacidade;
    private $passagensVendidas;

    public function __construct($capac)
    {
        $this->capacidade = $capac;
    }

    public function venderPassagem($qnt){   
        if($this->capacidade <= 0){
            echo "\nAs passagens esgotaram!!!\n";
            return false;
        }
        else{
            $this->capacidade = $this->capacidade-$qnt;
            echo "Compra realizada com sucesso!!!\n";
            return true;
        }
    }

}

$veiculo = new Veiculo(readline("Informe a capacidade do veiculo \n"));
$i = 1;
while ($i != 0){
    
    $i = readline("Deseja comprar uma passagem?\n0=nao\ndigite qualquer coisa para prosseguir");
    if($i!= 0){
       $veiculo -> venderPassagem(readline("Quantas passagens voce quer comprar"));
    }
   
    
}