<?php 
lobby();

if ($opcao = 1) {
    megaSena();
}



function lobby() {

    echo "==========================\n";
    echo "     🎰 MENU DE JOGOS     \n";
    echo "==========================\n";
    echo "[1] Mega-Sena     (1 a 60)   → Escolha de 6 a 20 números\n";
    echo "[2] Quina         (1 a 80)   → Escolha de 5 a 15 números\n";
    echo "[3] Lotofácil     (1 a 25)   → Escolha de 15 a 20 números\n";
    echo "[4] Lotomania     (0 a 99)   → Jogo fixo com 50 números\n";
    echo "==========================\n";

    $jogos = [
        1 => "Mega-Sena",
        2 => "Quina",
        3 => "Lotofácil",
        4 => "Lotomania",
        
    ];

    $opcao = readline("Escolha um jogo (1-4): ");

    print "Você escolheu: " . $jogos[$opcao] . "\n";
    return $opcao;

}

function megaSena(){
    echo "==========================\n";
    echo "       🎲 MEGA-SENA       \n";
    echo "==========================\n";

}

?>
