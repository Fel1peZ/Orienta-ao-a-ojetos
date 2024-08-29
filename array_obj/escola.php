<?php 

    class Escola{
        private $nome;
        private $endereco;
        private  $qtdAlunos;
        
        
        //Metodos

        public function __toString()
        {
            return $this->nome ."-". $this->endereco. "-". $this->qtdAlunos . "\n";
        }
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
         * Get the value of endereco
         */
        public function getEndereco()
        {
                return $this->endereco;
        }

        /**
         * Set the value of endereco
         */
        public function setEndereco($endereco): self
        {
                $this->endereco = $endereco;

                return $this;
        }

        /**
         * Get the value of qtdAlunos
         */
        public function getQtdAlunos()
        {
                return $this->qtdAlunos;
        }

        /**
         * Set the value of qtdAlunos
         */
        public function setQtdAlunos($qtdAlunos): self
        {
                $this->qtdAlunos = $qtdAlunos;

                return $this;
        }
    }


    $escolas = array();
    for($i=0;$i<4; $i++){
        $escola = new Escola;
        $escola->setNome(readline("Infome o nome da sua escola\n"));
        $escola->setEndereco(readline("Informe o nome do seu endereço\n"));
        $escola->setQtdAlunos(readline("Infome a quantidade de alunos\n"));

        array_push($escolas,$escola);
    }
   

    foreach($escolas as $dado){
        echo $dado. "\n";
    }
    $escolaMaisAlunos = $escolas[0];

    foreach($escolas as $dado){
        if($dado ->getQtdAlunos() > $escolaMaisAlunos->getQtdAlunos())
            $escolaMaisAlunos =  $dado;
       
    }
    echo "\nEscola com mais alunos: ".$escolaMaisAlunos;