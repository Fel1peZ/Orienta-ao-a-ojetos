<?php
    require_once("modelo/Carta.php");  


    $baralho =  array();
    for ($i=1; $i <8 ; $i++) { 
       $carta = new Carta;
       $carta->setNumero($i);
       if($i == 1) $carta->setNome("Um") ;
       if($i == 2) $carta->setNome("Dois") ;
       if($i == 3) $carta->setNome("Tres") ;
       if($i == 4) $carta->setNome("Quatro") ;
       if($i == 5) $carta->setNome("Cinco") ;
       if($i == 6) $carta->setNome("Seis") ;
       if($i == 7) $carta->setNome("Sete") ;
       array_push($baralho,$carta);
    }

    $opcao = 1;
    echo"\n\n================Menu================\n";
    echo"\n  1-Let's go gambling/rodar cartas";
    echo"\n  0-Sair\n\n";
    $opcao = readline("informe sua opcao: ");
    $tentativas = 0;
        switch ($opcao) {
            case 1:
                $cartaSelecionada = $baralho[array_rand($baralho)];
                do{
                    foreach($baralho as $dado) echo $dado;
                    $palpite = readline("\nInforme a carta que deseja selecionar: ");
                    if($palpite == $cartaSelecionada->getNumero()){
                        echo"\n*･｡ﾟ[̲̅\$̲̅(̲̅ ͡° ͜ʖ ͡°̲̅)̲̅\$̲̅]｡ﾟ.*  VOCE CONSEGUIU!!!! *･｡ﾟ[̲̅\$̲̅(̲̅ ͡° ͜ʖ ͡°̲̅)̲̅\$̲̅]｡ﾟ.*\n";
                        echo"Voce ganhou em ".$tentativas." tentativas!!! \n";
                        $opcao = 0;
                    } 
                    if($palpite < 8){
                        echo"Voce errou!!\n" ;
                        $tentativas++;
                     }
                     else{
                        echo"\n\nOpção errada, selecione uma carta válida!!\n\n";
                     }
                }while($opcao != 0);
                break;
            
            case 0:
               echo "Saindo do programa...\n";
                break;

        
        }
    
        

  