<?php

    class Posto {
        private $litrosGasolina;
        private $abastecimentosGasolina;

        public function __construct()
        {
            $this-> litrosGasolina = 0;
            $this->abastecimentosGasolina = array();
        }

        
        public function abastecer($litros){
            if($litros > $this->litrosGasolina){
                return false;
            }
            else{
                array_push($this->abastecimentosGasolina,$litros);
                $this->litrosGasolina= $this->litrosGasolina-$litros;
                return true;
            }

        }

        public function reporEstoque($litros){
            $this->litrosGasolina= $this->litrosGasolina+$litros;
        }
        public function getAbastecimentosGasolina(){
            return $this->abastecimentosGasolina;
        }
    }

    $posto = new Posto;
    $opcao = 1;
    do{

        echo"============================\n";
        echo"|   1-abastecer            |\n";
        echo"|   2-repor estoque        |\n";
        echo"|   3-listar abastecimentos|\n";
        echo"|   0-sair do programa     |\n";
        echo"============================\n";
        $opcao =readline("Selecione uma opção : \n");
        switch($opcao){
            case 0:
                echo "Saindo do program....";
                break;
            case 1:
                $abastecimento =0 ;
                $abastecimento = $posto->abastecer(readline("Informe a quantidade de litros que voce deseja abastecer: \n"));
                if($abastecimento == true){
                    echo"Abastecimento realizado com sucesso!!!\n";
                }
                if($abastecimento ==false){
                    echo"Falha no abastecimento,sem estoque!!!\n";
                }
                break;

            case 2:
               
                $posto->reporEstoque(readline("Informe a quantidade de litros que você deseja repor :\n"));
                echo"Estoque reposto com sucesso!!!\n";
                break;


            case 3:
                foreach($posto->getAbastecimentosGasolina()as $dado){
                    echo "abastecimento: " .$dado." litros\n";
                }
                break;

            default:
                echo"opção inválida";
                break;
        }//fim switch
     
    }while ($opcao != 0);//fim do while