<?php 

class Robo {
    private $tipo;
    private $nome;
    private int $qtdSensores;

    //COnstrutor
    public function __construct($n="",$t="",$qtS="")
    {
        $this->nome=$n;
        $this->tipo=$t;
        $this->qtdSensores=$qtS;
    }

    //Metodos
    public function __toString()
    {
        return $this->nome ."-". $this->tipo."\n";
    }
    public function getTipo()
    {
        return $this->tipo;
    }


    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }


    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }


    public function getQtdSensores(): int
    {
        return $this->qtdSensores;
    }


    public function setQtdSensores(int $qtdSensores): self
    {
        $this->qtdSensores = $qtdSensores;

        return $this;
    }
}

//Programa principal


$robo1 = new Robo();
$robo1->setNome("Máquina Mistério")
      ->setTipo("Arduino")->setQtdSensores(2);

$robo2 = new Robo();
$robo2->setNome("Charles Lecrash")
      ->setTipo("Arduino")->setQtdSensores(2);

$robo3 = new Robo();
$robo3->setNome("Juliete")
->setTipo("Arduino")->setQtdSensores(3);
echo $robos[2];

$robos = array($robo1,$robo2);
echo $robos[1]->getNome() ."\n";

array_push($robos,$robo3);
echo $robos[2]->getTipo(). "\n";

/*
for($i=0;$i<count($robos);$i++){
    echo $robos[$i]->getNome(). "\n";
}
*/
array_push($robos, new Robo("Laercio","Arduino",3));

/*
foreach($robos as $r){
    echo $r->getNome()."\n";

}
*/
$algumRobo = $robos[3];
echo $algumRobo->getTipo() . "\n";
echo $robos[3]->getTipo() . "\n";