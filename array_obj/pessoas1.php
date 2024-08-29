<?php

 class Pessoa{

    private $nome;
    private $sobrenome;
    private $idade;


    //METODOS
    public function __toString()
    {
        return $this->nome.", ".$this->idade. " anos \n";
    }
    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sobrenome
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     */
    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
 }
 //codigo principal
 $pessoas = array();
   do { 
   
 echo"======================\n";
 echo"    0-sair            \n";
 echo"    1-cadastrar       \n";
 echo"    2-listar pessoas  \n";
 echo"======================\n";

$opcao = readline("Escolha uma opcao \n");
switch ($opcao) {
    case 1:
        $pessoa = new Pessoa();
        $pessoa->setNome(readline("Infome o seu nome: \n"));
        $pessoa->setSobrenome(readline("Informe o seu sobrenome: \n"));
        $pessoa->setIdade(readline("Infome a sua idade: \n"));

        array_push($pessoas,$pessoa);
        break;
    
    case 2:
        if(count($pessoas)>0){
        echo "Lista:\n";
       foreach($pessoas as $dado){
        echo $dado;
        
       }
    }   else{
        echo "\n Não há pessoas cadastradas!\n";
    }
       echo"\n";
        break;
}
 
    
    
 }while($opcao != 0);