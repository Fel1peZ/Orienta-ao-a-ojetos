<?php

class Trapezio{
    private $baseMaior;
    private $baseMenor;
    private $altura;

    public function __toString()
    {
        return "A base maior mede :".$this->baseMaior."\nA base menor mede :" .$this->baseMenor."\nA altura mede :" .$this->altura ."\nA área do trapézio é :". $this->getAreaTrapezio(). "\n";
    }
    //metodos
    public function getAreaTrapezio(){
        return (($this->baseMaior + $this->baseMenor)*$this->altura)/2;
    }
    //gets and sets
    public function getBaseMaior()
    {
        return $this->baseMaior;
    }

    public function setBaseMaior($baseMaior): self
    {
        $this->baseMaior = $baseMaior;

        return $this;
    }

    public function getBaseMenor()
    {
        return $this->baseMenor;
    }


    public function setBaseMenor($baseMenor): self
    {
        $this->baseMenor = $baseMenor;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}

$trapezios = array();
for($i=0;$i<4; $i++){
    $trapezio = new Trapezio;
    $trapezio->setBaseMaior(readline("Infome o tamanho da base maior do trapezio: \n"));
    $trapezio->setBaseMenor(readline("Informe o tamanho da base menor do trapezio: \n"));
    $trapezio->setAltura(readline("Infome a altura do trapezio: \n \n \n"));

    array_push($trapezios,$trapezio);
}
$maiorArea = $trapezios[0];

    foreach($trapezios as $dado){
        if($dado ->getAreaTrapezio() > $maiorArea->getAreaTrapezio())
        $maiorArea =  $dado;
       
    }
    echo "\nTrapezio com a maior área: ". $maiorArea;