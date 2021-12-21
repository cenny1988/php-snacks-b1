<!-- ## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack5</title>
</head>
<body>
    <?php
        $paragraph = 'Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.';
    ?>

    <p>
        <?php echo $paragraph ?>
    </p>

    <?php

        $paragraphs = explode('.', $paragraph);
        // for ($i=0; $i < count($paragraphs); $i++) { 
        //     echo '<p>' .  $paragraphs[$i] . '.</p>';
        // }

        // proviamo a rifare il ciclo con un foreach
        foreach ($paragraphs as $value) {
            echo '<p>' .  $value . '.</p>';
        }
    ?>
</body>
</html>