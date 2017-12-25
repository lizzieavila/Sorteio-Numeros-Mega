<?php

$mega_sena=array();
$contador=1;

while($contador<7){
    $sorteio= rand(1, 60);
    if(!in_array($sorteio,$mega_sena)){
        $mega_sena[]=$sorteio;
        $contador++;
    }
}

sort($mega_sena);
print_r($mega_sena);

?>