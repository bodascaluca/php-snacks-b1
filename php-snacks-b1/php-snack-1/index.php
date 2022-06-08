<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jsnack1</title>
</head>
<body>
    <!-- 
       ## Snack 1
        Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
        ## Snack 2
        Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
        ## Snack 3
        Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
        Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
        ## Snack 4 (Bonus)
        Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 
     -->

     <?php 
        $partite = [
                        [
                            "squadraIn" => "Juventus",
                            "squadraOut" => "Milan",
                            "puntiIn" => "3",
                            "puntiOut" => "2",
                        ],
                        [
                            "squadraIn" => "Toro",
                            "squadraOut" => "Fiorentina",
                            "puntiIn" => "1",
                            "puntiOut" => "5",
                        ],
                         [
                            "squadraIn" => "Lecce",
                            "squadraOut" => "Sassuolo",
                            "puntiIn" => "1",
                            "puntiOut" => "3",
                        ]
                    ];   
                    
     ?>

     <?php 
          for($i=0; $i < count($partite); $i++) {
            $current_partite = $partite[$i];
     ?>
        <div>
               <p>
               <?php echo $current_partite["squadraIn"];  ?> - <?php echo $current_partite["squadraOut"]; ?> | <?php echo $current_partite["puntiIn"];    ?> -  <?php echo $current_partite["puntiOut"];   ?>

               </p>

        </div>
     <?php 
        };
     ?>

     <?php ?>





    

</body>
</html>