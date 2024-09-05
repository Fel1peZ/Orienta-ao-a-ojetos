<?php 

class Pokemon{
    //Atributos: caracteristicas
public $nome;
public $tipo;
public $ataque;
public $defesa;
public $velocidade;
public $nivel;
public $pontosVida;
public $experiencia;

//Métodos: ações
function __construct(){
    $this->nivel=1;
    $this->pontosVida= 10;
    $this->experiencia= 0;
}
function batalhar(){
    $this->aumentarXp(5);
}

function aumentarNivel(){
    $this-> nivel = $this-> nivel +1;
    $this -> aumentarPontosVida();
    
}

function aumentarPontosVida(){
    $this->pontosVida = $this-> nivel*10;

}
function aumentarXp($exp){
    $this -> experiencia += $exp;
    if($this->experiencia >= 100)
    $this -> aumentarNivel();
}
function __toString()
{
    $dados = "\nNome :".$this -> nome ."\nTipo: ".$this-> tipo."\nNível: ".$this-> nivel."\nVida: ".$this-> pontosVida."\nXp: ". $this-> experiencia."\n";
    return $dados;
}
}
//final classe pokemon

$psyduck = new Pokemon;
$psyduck ->nome="Psyduck";
$psyduck ->tipo="Água";


$lucario = new Pokemon;
$lucario ->nome="Lucario";
$lucario ->tipo="Lutador";

for ($i=0; $i < 4 ; $i++) { 
    $psyduck ->batalhar();
}
for ($i=0; $i < 5 ; $i++) { 
    $lucario->batalhar();
}
//echo $psyduck ->dados();
//echo $lucario ->dados();
echo $psyduck;
echo $lucario;

$pokeArray = array ("nome" => "Pikachu",
                    "tipo"=> "Elétrico",
                    "nivel"=> 3);