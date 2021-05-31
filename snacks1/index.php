<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->



<?php
$partitebasket=["Olimpia Milano - Cantù | 55-60","Virtus Bologna- Varese | 70-62","Pesaro - Reyer Venezia| 50-60","Stella Azzurra - Virtus Roma| 64-60","Fortitudo Bologna - Reggiana | 75-50" ];


// echo  $partitebasket;
for ($i=0; $i < count($partitebasket); $i++) { 
    $partitestampate= $partitebasket[$i];
    echo $partitestampate;
}





?>

