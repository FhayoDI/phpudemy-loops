<?php
$maior = PHP_INT_MIN;
$menor = PHP_INT_MAX;
while (true) {
$valor = readline("digite um valor: ");
    if ($valor == 0) {
        break;
    }
    if ($valor > $maior) {
        $maior = $valor;
    }
    if ($valor < $menor) {
        $menor = $valor;
    }
}
if ($maior != PHP_INT_MIN && $menor != PHP_INT_MAX) {
    echo "maior valor $maior \nmenor valor $menor";
}