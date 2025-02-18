<?php
$contador = readline("até que numero comparar?");
$comeco = readline("ponto de partida");
//function umadez(){
//    global $começo;
//    global $contador;
//    if ($começo > $contador) {
//        echo "$começo" . +1;
//    }
//}
while ($comeco < $contador) {
    $comeco = $comeco + 1;
    echo $comeco . "\n";
    sleep(0.50);
}