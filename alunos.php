<?php

    class Aluno{
        private $nome;
        private $nota1;
        private $nota2;

        function imprimirMedia(){
            return "O aluno: ".$this->  getNome()." tem a média de :". $this-> getMedia(). "\n";
        }
        function getMedia(){
        return ($this->nota1 + $this->nota2)/2;
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

      
        public function getNota1()
        {
                return $this->nota1;
        }

       
        public function setNota1($nota1): self
        {
                $this->nota1 = $nota1;

                return $this;
        }

        public function getNota2()
        {
                return $this->nota2;
        }

        public function setNota2($nota2): self
        {
                $this->nota2 = $nota2;

                return $this;
        }
    }
    //fim class aluno

    $aluno1 = new Aluno;
    $aluno1 -> setNome(readline("Informe seu nome: \n"));
    $aluno1 -> setNota1(readline("Informe seu nome: \n"));
    $aluno1 ->setNota2(readline("Informe seu nome: \n"));
    $aluno2 = new Aluno;
    $aluno2 -> setNome(readline("Informe seu nome: \n"));
    $aluno2 -> setNota1(readline("Informe seu nome: \n"));
    $aluno2 ->setNota2(readline("Informe seu nome: \n"));
    $aluno3 = new Aluno;
    $aluno3 -> setNome(readline("Informe seu nome: \n"));
    $aluno3 -> setNota1(readline("Informe seu nome: \n"));
    $aluno3 ->setNota2(readline("Informe seu nome: \n"));

    echo $aluno1 -> imprimirMedia();
    echo $aluno2 -> imprimirMedia();
    echo $aluno3 -> imprimirMedia();

    