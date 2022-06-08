<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>
<body>
    <!--   ## Snack 2
        Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
        ## Snack 3
        Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
        Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
        ## Snack 4 (Bonus)
        Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
        
        <?php $name = $_GET['name']; ?>
        <?php $mail = $_GET['mail']; ?>
        <?php $age = $_GET['age']; ?>

        <?php $check_name = strlen($name);?>
        <?php $check_mail = strpos($mail, "@"); ?>
        <?php $check_point = strpos($mail, ".");?>
        <?php $check_age = "age is " . is_numeric($age) . "<br>"; ?>

        <?php if($check_name > 3 || $check_mail === true || $check_point === true || $check_age === 1 ){ ?>
            <h2>L'accesso è</h2>
            <h3> riuscito</h3>
       <?php } else { ?> 
            <h2>L'accesso è</h2>
            <h3>Non riuscito</h3>
        <?php  } ?>
      
        <!-- Da qua in giù sono prove per capire ecc... -->

        <?php 
            if($check_name > 3){
                echo "Ha più di tre caratteri";
            } else {
                echo "Ha meno di tre caratteri";
            }
        ?>

        <?php
            echo $check_mail;
            echo $age;
            echo "age is " . is_numeric($age) . "<br>";
        ?>
</body> 
</html>