<?php

    class Prato{
        private $descricao;
        private $qntd;
        private $valorUnitario;

        public function __toString()
        {
                return "O prato é um ". $this->descricao. "\nPossui " .$this->qntd ." unidades\nE o preço unitário ". $this->valorUnitario. "\n";
        }
        //metodos
        public function getValorTotal(){
            return $this->qntd * $this->valorUnitario;
        }
        //gets and sets
        public function getDescricao()
        {
                return $this->descricao;
        }

        public function setDescricao($descricao): self
        {
                $this->descricao = $descricao;

                return $this;
        }

        public function getQntd()
        {
                return $this->qntd;
        }

        public function setQntd($qntd): self
        {
                $this->qntd = $qntd;

                return $this;
        }

        public function getValorUnitario()
        {
                return $this->valorUnitario;
        }

        public function setValorUnitario($valorUnitario): self
        {
                $this->valorUnitario = $valorUnitario;

                return $this;
        }
    }

    $pratos = array();
    for($i=0;$i<3; $i++){
        $prato = new Prato;
        $prato->setDescricao(readline("Infome a descrição do seu prato  \n"));
        $prato->setQntd(readline("Informe a quantidade do seu prato  \n"));
        $prato->setValorUnitario(readline("Informe o valor unitário do prato  \n\n\n"));

        array_push($pratos,$prato);
    }
    $janta = 0;
    foreach($pratos as $dado){
       $janta =$janta + $dado ->getValorTotal();
    }
    //imprimir pratos
    $i = 1;
    foreach($pratos as $dado ){
        echo "\nPrato ".$i .":\n".$dado;
        $i++;
    }
    echo "O valor total da janta é: ". $janta. "\n";