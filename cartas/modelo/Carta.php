<?php 

    class Carta {
        private int $numero;
        private string $nome;


        public function __toString()
        {
            return $this->numero."-".$this->nome."  ";
        }
        public function getNumero(): int
        {
            return $this->numero;
        }
    
        public function setNumero(int $numero): self
        {
            $this->numero = $numero;
    
            return $this;
        }
    
        public function getNome()
        {
            return $this->nome;
        }
    
        public function setNome(string $nome): self
        {
            $this->nome = $nome;
    
            return $this;
        }
        
    }