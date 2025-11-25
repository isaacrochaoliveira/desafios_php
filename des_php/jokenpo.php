<?php 

$jogada = $_POST['jogada'];

if (empty($jogada)) {
    echo "Jogada Inválida!";
    exit();
} else {
    if (($jogada > 3) || $jogada < 1) {
        echo "Jogada Inválida!";
        exit();
    }
}

$computer = random_int(1, 3);

if ($computer == 1) {
    $comp = 'Pedra';
} else if ($computer == 2) {
    $comp = 'Papel';
} else if ($computer == 3) {
    $comp = 'Tesoura';
}

if ($jogada == 1) {
    $jog = 'Pedra';
} else {
    if ($jogada == 2) {
        $jog = 'Papel';
    } else {
        if ($jogada == 3) {
            $jog = 'Tesoura';
        }   
    }
}

// LÓGICA PARA O FUNCIONAMENTO DO JOGO

if (($jogada == 1) && ($computer == 1)) {
    $resultado = 'EMPATE';
} else {
    if ($jogada == 1)
}


echo "$jog;$comp;$resultado";
?>