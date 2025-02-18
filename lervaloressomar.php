<?php
$contador = 10;
$quebra = 0;
$soma = 0;
$valores = null;
while($quebra != $contador){
        $valores=readline("digite um valor:  ");
        if($quebra != $contador){
          $soma += $valores;
            $quebra = $quebra + 1;
        }
}
echo "valores somados: $soma ";
$media = $soma / $quebra;
echo "a media é "$media;