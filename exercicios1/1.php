<?php

    class Carro{
        private $modelo;
        private $marca;
        private $anoFabricacao;
        private $velocidadeMax;

        

        public function getModelo()
        {
                return $this->modelo;
        }
        public function setModelo($modelo): self
        {
                $this->modelo = $modelo;

                return $this;
        }
        public function getMarca()
        {
                return $this->marca;
        }

        public function setMarca($marca): self
        {
                $this->marca = $marca;

                return $this;
        }

        public function getAnoFabricacao()
        {
                return $this->anoFabricacao;
        }

        public function setAnoFabricacao($anoFabricacao): self
        {
                $this->anoFabricacao = $anoFabricacao;

                return $this;

        }
        

        public function getVelocidadeMax()
        {
                return $this->velocidadeMax;
        }

        public function setVelocidadeMax($velocidadeMax): self
        {
                $this->velocidadeMax = $velocidadeMax;

                return $this;
        }
    }

    $carro1 = new Carro;
    $carro1-> setModelo(readline("Informe o modelo do carro \n"));
    $carro1-> setMarca(readline("Informe a marca do carro \n"));
    $carro1-> setAnoFabricacao(readline("Informe o ano de Fabricação \n"));
    $carro1-> setVelocidadeMax(readline("Informe a velocidade maxima \n"));
    $carro2 = new Carro;
    $carro2-> setModelo(readline("Informe o modelo do carro \n"));
    $carro2-> setMarca(readline("Informe a marca do carro \n"));
    $carro2-> setAnoFabricacao(readline("Informe o ano de Fabricação \n"));
    $carro2-> setVelocidadeMax(readline("Informe a velocidade maxima \n"));
    $carro3 = new Carro;
    $carro3-> setModelo(readline("Informe o modelo do carro \n"));
    $carro3-> setMarca(readline("Informe a marca do carro \n"));
    $carro3-> setAnoFabricacao(readline("Informe o ano de Fabricação \n"));
    $carro3-> setVelocidadeMax(readline("Informe a velocidade maxima \n"));

    