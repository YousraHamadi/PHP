<?php

function string($age, $genre){
   if($age> 18){
    echo "Vous êtes $genre et vous êtes majeur."; 
   }
   else{
    echo "Vous êtes $genre et vous êtes mineur.";
   }  
 
}
 string(2,"une femme");

?>


