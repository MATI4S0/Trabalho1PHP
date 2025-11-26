<?php 

    echo "\033c";

    while (true) {

        $opcao = lobby();

        if ($opcao == 1) {
            megaSena();
        }elseif ($opcao == 2) {
            quina();
        }elseif ($opcao == 3) {
            lotofacil();
        }elseif ($opcao == 4){
            lotomania();
        }
        echo "\033c";
        $a = readline("Deseja jogar novamente? (1-Sim | 2-Não)");
        echo "\033c";

        if($a == 2){
            echo "\033c";
            print "Obrigado por jogar!!";
            exit;
        }
    }

    
function lobby() {

    print "===========================\n";
    print "       MENU DE JOGOS       \n";
    print "===========================\n";
    print "[1] Mega-Sena     (1 a 60)   → Escolha de 6 a 20 números\n";
    print "[2] Quina         (1 a 80)   → Escolha de 5 a 15 números\n";
    print "[3] Lotofácil     (1 a 25)   → Escolha de 15 a 20 números\n";
    print "[4] Lotomania     (0 a 99)   → Jogo fixo com 50 números\n";
    print "===========================\n";

    $jogos = [
        1 => "Mega-Sena",
        2 => "Quina",
        3 => "Lotofácil",
        4 => "Lotomania",
        
    ];

    $opcao = trim( readline("Escolha um jogo (1-4): "));
    if ($opcao < 1 || $opcao > 4) {
        echo "\033c";
        print "Opção inválida! Tente novamente.\n";
        $pularLinha = readline("===PRESSIONE ENTER PARA CONTINUAR===\n");
        echo "\033c";
        return lobby();
    }
    print "Você escolheu: " . $jogos[$opcao] . "\n";
    $pularLinha = readline("===PRESSIONE ENTER PARA CONTINUAR===\n");
    echo "\033c";
    return $opcao;


}

function megaSena(){

    echo "\033c";

    print "===========================\n";
    print "         MEGA-SENA         \n";
    print "===========================\n";

    $quantidadejogos = readline("Quantos jogos deseja apostar?: ");
    echo "\033c";

    print "===========================\n";
    print "         MEGA-SENA         \n";
    print "===========================\n";

    $quantidadeDezenas = readline("Quantas dezenas você quer jogar (6 a 20)? \n");
    echo "\033c";

    if ($quantidadeDezenas < 6 || $quantidadeDezenas > 20) {
        return megaSena();
    }else{
        

        $dezenas = [];

        
        for ($jogos = 1; $jogos <= $quantidadejogos; $jogos++) {
            $dezenas = [];

            for ($de = 0; $de < $quantidadeDezenas; $de++) {
                do {
                    $num = random_int(1, 60);
                } while (in_array($num, $dezenas));

            $dezenas[] = $num;
        }

        sort($dezenas);

        print "\n" . $jogos . "º jogo:\n";
        foreach ($dezenas as $d) {
            echo " - $d - ";
        }
        
        readline();
        echo "\033c";

        }

        $pularLinha = readline("\n===PRESSIONE ENTER PARA VER O VALOR TOTAL DA APOSTA===\n");
        echo "\033c";

        $valores = [
            6 => 6.00,
            7 => 42.00,
            8 => 168.00,
            9 => 504.00,
            10 => 1260.00,
            11 => 2772.00,
            12 => 5544.00,
            13 => 10296.00,
            14 => 18018.00,
            15 => 30030.00,
            16 => 48048.00,
            17 => 74256.00,
            18 => 111384.00,
            19 => 162792.00,
            20 => 232560.00
        ];

        $valorTotal = $valores [$quantidadeDezenas] * $quantidadejogos;

        print "Será gasto R$" . $valorTotal . "\n";
        $pularLinha = readline("===PRESSIONE ENTER PARA CONTINUAR===\n");
        echo "\033c";
        print "\nObrigado por jogar na Mega-Sena!\n";

        }

    
}

function quina(){

    echo "\033c";

    print "===========================\n";
    print "           QUINA           \n";
    print "===========================\n";

    $quantidadejogos = readline("Quantos jogos deseja apostar?: ");
    echo "\033c";

    $quantidadeDezenas = readline("Quantas dezenas você quer jogar (5 a 15)? \n");
    echo "\033c";
 
    if ($quantidadeDezenas < 5 || $quantidadeDezenas > 15) {
        return quina();
    }else{

        $dezenas = [];

        for ($jogos=1; $jogos <= $quantidadejogos;  $jogos++) { 
            $dezenas = [];

            for ($de=0; $de < $quantidadeDezenas;  $de++) { 
                do {
                    $num = random_int(1, 80);
                }while (in_array ($num, $dezenas));
                    $dezenas[] = $num;
                }
            sort($dezenas);

            print "\n" . $jogos . "º jogo:\n";
            foreach ($dezenas as $d) {
            print " - " . $d . " - ";

            }

            readline();
            echo "\033c";

        }

        $pularLinha = readline("\n===PRESSIONE ENTER PARA VER O VALOR TOTAL DA APOSTA===\n");
        echo "\033c";

        $valores = [
        5 => 15.00,
        6 => 18.00,
        7 => 63.00,
        8 => 168.00,
        9 => 378.00,
        10 => 756.00,
        11 => 1386.00,
        12 => 2376.00,
        13 => 3861.00,
        14 => 6006.00,
        15 => 9009.00
        ];

        $valorTotal = $valores [$quantidadeDezenas] * $quantidadejogos;
        Print ("Será gasto R$" . $valorTotal . "\n");
        $pularLinha = readline("===PRESSIONE ENTER PARA CONTINUAR===\n");
        echo "\033c";
        
    }

    
}

function lotofacil(){

    echo "\033c";

    print "===========================\n";
    print "         LOTOFÁCIL         \n";
    print "===========================\n";

    $quantidadejogos = readline("Quantos jogos deseja apostar?: ");
    echo "\033c";

    $quantidadeDezenas = readline("Quantas dezenas você quer jogar (15 a 20)? \n");
    echo "\033c";

 
    if ($quantidadeDezenas < 15 || $quantidadeDezenas > 20) {
        return lotofacil();
    }else{

        $dezenas = [];

        for ($jogos=1; $jogos <= $quantidadejogos ; $jogos++) { 
            $dezenas = [];

            for ($de=0; $de < $quantidadeDezenas ; $de++) { 
                do {
                    $num = random_int(1,25);
                }while (in_array ($num, $dezenas));
                    $dezenas[] = $num;
                }

                sort($dezenas);
                print "\n" . $jogos . "º jogo:\n";
                foreach ($dezenas as $d) {
                print " - " . $d . " - ";
                }   
                
            readline();
            echo "\033c";

            }
        
        $pularLinha = readline("\n===PRESSIONE ENTER PARA VER O VALOR TOTAL DA APOSTA===\n");
        echo "\033c";

        $valores = [
            15 => 14.0,
            16 => 56.00,
            17 => 476.00,
            18 => 2856.00,
            19 => 13566.00,
            20 => 54264.00
        ];

        $valorTotal = $valores [$quantidadeDezenas] * $quantidadejogos;
        Print ("Será gasto R$" . $valorTotal . "\n");
        $pularLinha = readline("===PRESSIONE ENTER PARA CONTINUAR===\n");
        echo "\033c";

        

    }

}

function lotomania(){

    echo "\033c";

    print "===========================\n";
    print "         LOTOMANIA         \n";
    print "===========================\n";

    $quantidadejogos = readline("Quantos jogos deseja apostar?: ");
    echo "\033c";

    print "Jogo fixo com 50 números\n";
    $quantidadeDezenas = 50;
    echo "\033c";

 
    if ($quantidadeDezenas < 50 || $quantidadeDezenas > 50) {
        return lotomania();
    }else{
        $dezenas = [];

        for ($jogos=1; $jogos <= $quantidadejogos ; $jogos++) { 
            $dezenas = [];

            for ($de=0; $de < $quantidadeDezenas; $de++){
                do {
                    $num = random_int(0,99);
                }while (in_array($num, $dezenas));
                    $dezenas[] = $num;
                }
                sort($dezenas);

                print "\n" . $jogos . "º jogo:\n";
                foreach ($dezenas as $d) {
                    print " - " . $d . " - ";
            }
            
        readline();
        echo "\033c";

        }

        

        $pularLinha = readline("\n===PRESSIONE ENTER PARA VER O VALOR TOTAL DA APOSTA===\n");
        echo "\033c";

        $valorTotal = 2.50 * $quantidadejogos;
        Print ("Será gasto R$" . $valorTotal . "\n");
        $pularLinha = readline("===PRESSIONE ENTER PARA CONTINUAR===\n");
        echo "\033c";

        
    }
}
