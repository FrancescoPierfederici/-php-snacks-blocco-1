<!-- ## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->



<?php

$posts = [

    '30/05/2021' => [
        [
            'title' => 'Post 1',
            'author' => 'Francesco Pierfederici',
            'text' => 'Compleanno Francesco'
        ],

    ],
    '31/05/2021' => [
        [
            'title' => 'Post 2',
            'author' => 'Francesco Pierfederici',
            'text' => 'Corso Boolean + esercizi'
        ]
    ],
    '01/06/2021' => [
        [
            'title' => 'Post 3',
            'author' => 'Francesco Pierfederici',
            'text' => 'Corso Boolean + esercozo'
        ],

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
                       


                        $dati_extra_keys = array_keys($posts);

                        for ($y = 0; $y < count($dati_extra_keys); $y++) {
                            $key = $dati_extra_keys[$y];
                            $value = $posts[ $key];
                            



                            echo "<li>" . $key; 
                            echo "<ul>";
                            for ($i=0; $i < count($value); $i++) { 
                                $singlePost= $value[$i];
                                echo "<li>";
                                echo  "<strong>" . $singlePost["title"]. "</strong><br>";
                                echo  "<em>" . $singlePost["author"]. "</em>";
                                echo  "<p>" . $singlePost["text"]. "</p>";

                                echo  "</li>";

                            }



                            echo "</ul>";
                            echo  "</li>";
                        }
                        ?>

      
    </ul>

</body>

</html>