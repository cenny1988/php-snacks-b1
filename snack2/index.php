<!-- Snack 2 -->
<!-- 
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>
    <?php 

        $mail = $_GET['mail'];
        $name = $_GET['name'];
        $age = $_GET['age'];
        $accesso = false;
        
        echo $mail . $name . $age . '<br>';

        // chack name
        if ( strlen($name) > 3 ) {
            // chack age
            if ( is_numeric($age) ){
                // chack mail
                if ( (str_contains($mail, ".")) && (str_contains($mail, "@")) ){
                    // accesso is true
                    $accesso = true;
                }
            }
        }
        // check stato
        if ($accesso){
            echo "<div>Accesso Riuscito</div>";
        }else echo "<div>Accesso Negato</div>";
    ?>
</body>
</html>