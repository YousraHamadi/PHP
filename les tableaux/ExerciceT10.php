<?php
$departements = array (
    'Aisne' => 'Chateau_Thiery',
    'Nord' => 'Lille',
    'Oise' => 'Clerment',
    'Pas_de_calais' => 'Marseille',
    'Somme'=> 'Montdidier'
);
foreach($departements as $dep => $ville){
    echo $dep.' '.'vaut'.' '.$ville;
    echo "<br>";
}

?>

