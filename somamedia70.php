<?php
//Elaborar um programa que apresente o resultado da soma e a média dos valores pares
//situados na faixa numérica de 50 a 70.
$soma = 0;
$i = 0;
for ($num = 50; $num<=70; $num++){
    if ($num % 2 == 0){
        $soma += $num;
    }
}
if ($contador > 0){
    $media = $soma / $contador;
} else {
    $media = 0;
}
echo "A soma dos números pares de 50 a 70 é: $soma \n";
echo "a média dos números pares de 50 a 70 é: $media \n";