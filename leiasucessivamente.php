<?php
$soma = 0;
$media = 0;
$qntvalores = 1 ;

$valores = readline("digite um valor: ");

while ($valores != 0 ) {
    $valores = readline("digite um valor: ");
    $soma += $valores;
    $qntvalores ++;
    $media = $soma / $qntvalores;
}
echo "a soma é $soma \na média é $media \nvocê inseriu $qntvalores valores \n";
