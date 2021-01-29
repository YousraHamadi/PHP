<?php

function string($number1, $number2){
    if($number1> $number2){
        echo "le premier nombre est plus grand que le deuxième";
    }
    elseif($number1< $number2){
        echo "Le premier nombre est plus petit";
    }
    else{
        echo "Les deux nombres sont identiques";
    }
    
}
 string(7,4);

?>




