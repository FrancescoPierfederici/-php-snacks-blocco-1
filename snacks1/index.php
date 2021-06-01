<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->



<?php
$partitebasket = [
    [
        "team1"=>"varese",
        "team1"=>"varese",
        "point_team1"=>66,
        "point_team2"=>66,

    ],
    [
        "team1"=>"varese",
        "team1"=>"varese",
        "point_team1"=>66,
        "point_team2"=>66,

    ],
    [
        "team1"=>"varese",
        "team1"=>"varese",
        "point_team1"=>66,
        "point_team2"=>66,

    ],
    [
        "team1"=>"varese",
        "team1"=>"varese",
        "point_team1"=>66,
        "point_team2"=>66,

    ],
    [
        "team1"=>"varese",
        "team1"=>"varese",
        "point_team1"=>66,
        "point_team2"=>66,

    ],
    [
        "team1"=>"varese",
        "team1"=>"varese",
        "point_team1"=>66,
        "point_team2"=>66,

    ],
];





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
        for ($i = 0; $i < count($partitebasket); $i++) {
            $partitacorrente = $partitebasket[$i];
            $testofinale = " ";
            // Variabile nomi squadra
            $nomisquadre = $partitacorrente["team1"] . " - " . $partitacorrente["team2"];

            // Variabile punti squadra
            $puntisquadre = $partitacorrente["point_team1"] . " - " . $partitacorrente["point_team2"];
            $testofinale = $nomisquadre . " | " . $puntisquadre;

        ?>
            <li>
                <?php echo $testofinale; ?>
            </li>



        <?php
        }
        ?>
    </ul>
</body>

</html>