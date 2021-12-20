<!-- 
## Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
    <?php
        $giornata1 = [
            [
                'casa' => 'AX Armani Exchange Milano',
                'ospite' => 'Virtus Segafredo Bologna',
                'puntiCasa' => 63,
                'puntiOspite' => 72,
            ],
            [
                'casa' => 'Dolomiti Energia Trentino',
                'ospite' => 'Allianz Pallacanestro Trieste',
                'puntiCasa' => 83,
                'puntiOspite' => 72,
            ],
            [
                'casa' => 'GeVi Napoli',
                'ospite' => 'Happy Casa Brindisi',
                'puntiCasa' => 80,
                'puntiOspite' => 79,
            ],
            [
                'casa' => 'Nutribullet Treviso Basket',
                'ospite' => 'Unahotels Reggio Emilia',
                'puntiCasa' => 63,
                'puntiOspite' => 70,
            ]
        ]

    ?>
</head>
<body>
    <?php
        for($i=0; $i<count($giornata1); $i++){
            echo $giornata1[$i]['casa'] .  " - " . $giornata1[$i]['ospite'] . " | " . $giornata1[$i]['puntiCasa'] . "-" . $giornata1[$i]['puntiOspite'] . "<br>";
        }
    ?>
</body>
</html>