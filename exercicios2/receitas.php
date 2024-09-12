<?php 

    class Receita{
        private string $descricao;
        private $valor;

        //tostring
        public function __toString()
        {
            return "Receita: ".$this->descricao."\n"."Valor:  R$ ". $this->valor. "\n";
        }
        //getters setters
        public function getDescricao(): string
        {
                return $this->descricao;
        }

        public function setDescricao(string $descricao): self
        {
                $this->descricao = $descricao;

                return $this;
        }

        public function getValor()
        {
                return $this->valor;
        }

        public function setValor($valor): self
        {
                $this->valor = $valor;

                return $this;
        }
    }//fim classe receita

    class Despesa{
        private string $descricao;
        private $valor;

         //tostring
         public function __toString()
         {
             return "Despesa: ".$this->descricao."\n"."Valor:  R$ ". $this->valor."\n";
         }
         //getters setters
        public function getDescricao(): string
        {
                return $this->descricao;
        }

 
        public function setDescricao(string $descricao): self
        {
                $this->descricao = $descricao;

                return $this;
        }

        public function getValor()
        {
                return $this->valor;
        }

   
        public function setValor($valor): self
        {
                $this->valor = $valor;

                return $this;
        }

      
        }//fim class despesa

    $despesas = array();
    $receitas = array();
    $opcao = 1;

    do {
        echo"============================\n";
        echo"    1-Adicionar receita            \n";
        echo"    2-Adicionar despesa        \n";
        echo"    3-Listar receitas\n";
        echo"    4-Listar despesas     \n";
        echo"    5-Sumarizar \n";
        echo"    0-Sair do programa\n";
        echo"============================\n";
        $opcao = readline("\nInforme a opção: \n");
    switch($opcao){

        case 1:
            $receita = new Receita;
            $receita->setDescricao(readline("Informe a descrição da sua receita: \n"));
            $receita->setValor(readline("Informe o valor da receita recebida: \n"));
            array_push($receitas,$receita);

            break;
        
        case 2:
            $despesa = new Despesa;
            $despesa->setDescricao(readline("Informe a descrição da sua despesa: \n"));
            $despesa->setValor(readline("Informe o valor da despesa: \n"));
            array_push($despesas,$despesa);
            break;

        case 3:
            echo "\nListando suas receitas:\n\n";
            $num = 1;
            foreach($receitas as $dados){
                echo$num ."- ".  $dados. "\n";
                $num++;
            }
            break;

        case 4:
            $num = 1;
            echo "\nListando suas despesas:\n\n";
            foreach($despesas as $dados){
                echo $num ."- ".$dados. "\n";
                $num ++;
            }
            break;

        case 5:
            $totalReceita = 0;
            $totalDespesas = 0;
            $valorTotal =  0;
            foreach($receitas as $dados){
                $totalReceita = $totalReceita +$dados->getValor();
            }
            foreach($despesas as $dado){
                $totalDespesas = $totalDespesas +$dado->getValor();
            }
            $valorTotal = $totalReceita-$totalDespesas;
            
            echo "Saldo: R$ ".$valorTotal."\nTotal de receitas: R$ ".$totalReceita."\nTotal de despesas: R$ ".$totalDespesas."\n";
            break;

        case 0:
            echo "\n Saindo do programa...\n";
            break;

        }//fim switch

      

     }while ($opcao !=0);