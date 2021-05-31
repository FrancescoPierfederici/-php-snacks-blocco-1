<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php
$name = $_GET["name"];
$mail =$_GET["mail"];
$age =$_GET["age"];

$valid = true;

if (strrpos($mail, "@") === false) {
    $valid= false;
} else if (strrpos($mail, ".") === false) {
    $valid = false;
}


if(strlen($name) <= 3) {
    $valid= false;
}

if (!is_numeric( $age)){
    $valid=false;

}



$result = $valid ? 'Accesso riuscito' : 'Accesso Negato';






?>



<div>
    <header>
        <nav>
            <ul>
                
                <li><?php echo $valid ? 'Accesso riuscito' : 'Accesso Negato';?></li>
                
            </ul>
        </nav>
    </header>
