<?php

function saque($placar)
{
    list($a, $b) = explode(":", $placar);
    $total = $a + $b;
    $divisor = 5;

    if ($total < $divisor) {
        return 'Jogador A';
    }

    if ($total >= 40) {
        $divisor = 2;
    }

    if (floor($total / $divisor) % 2 == 0) {
        return 'Jogador A';
    }

    return 'Jogador B';
}

print (saque($argv[1])) . PHP_EOL;
