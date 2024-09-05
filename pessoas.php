<?php

    class Pessoa{

        private $nome;
        private $endereco;
        private $cidade;
        private $UF;
        private $altura;
        //métodos
        function getApresentacao(){
            
            return "Olá mundo, sou ". $this->getNome(). " resido no endereço ". $this->getEndereco() .",". $this->getCidade(). " " . $this->getUF(). " ,e possuo uma altura de ". $this->getAltura(). "\n";

        }
        //getters and setters
        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        public function getEndereco()
        {
                return $this->endereco;
        }

        public function setEndereco($endereco): self
        {
                $this->endereco = $endereco;

                return $this;
        }

        public function getCidade()
        {
                return $this->cidade;
        }

 
        public function setCidade($cidade): self
        {
                $this->cidade = $cidade;

                return $this;
        }

 
        public function getUF()
        {
                return $this->UF;
        }

        public function setUF($UF): self
        {
                $this->UF = $UF;

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
    //fim da classe pessoa
    $pessoa1 = new Pessoa;
    $pessoa1 -> setNome("Felipe");
    $pessoa1 -> setEndereco("Rua Capelinha");
    $pessoa1 -> setCidade("Foz do Iguaçu");
    $pessoa1 -> setUF("PR");
    $pessoa1 -> setAltura("1,75");
    echo $pessoa1-> getApresentacao();

    $pessoa2 = new Pessoa;
    $pessoa2 -> setNome("João");
    $pessoa2 -> setEndereco("Rua Tocantins");
    $pessoa2 -> setCidade("Foz do Iguaçu");
    $pessoa2 -> setUF("PR");
    $pessoa2 -> setAltura("1,90");
    echo $pessoa2-> getApresentacao();    