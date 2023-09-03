<?php

    function ranking($vit, $derr) {

        $saldo = $vit - $derr;
        $nivel = "";

        if ($saldo < 10) {
            $nivel = "Ferro";
        } elseif ($saldo >= 11 && $saldo <= 20) {
            $nivel = "Bronze";
        } elseif ($saldo >= 21 && $saldo <= 50) {
            $nivel = "Prata";
        }
       return[$saldo,$nivel];
    }

    $vit = 100;
    $derr = 60;
    list ($saldo, $nivel) = ranking($vit, $derr);
    echo "O Herói tem de saldo de $saldo vitórias e esta no nivel $nivel";