<!-- 
## Snack 7
Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack7</title>
    <?php
        $school = [
            'Mario Rossi' => [6, 6, 7, 9, 8, 6],
            'Maria Pagani' =>[7, 7, 8, 6, 6, 7]
        ]
    ?>
</head>
<body>
    <?php
        $names = array_keys($school);
        for ($i=0; $i < count($names); $i++) { 
            
            $name = $names[$i];
            $scores = $school[$name];

            $avg = 0;
            for ($j=0; $j < count($scores); $j++) { 
                
                $score = $scores[$j];
                $avg += $score;
            }
            $avg /= count($scores);

            echo $name . ': ' . round($avg, 1) . "/10<br>";
        }

        // provando con un foreach...
        foreach ($school as $names => $scores) {
            $avg = 0;

            foreach ($scores as $score) {
                $avg += $score;
            }
            $avg /= count($scores);
            
            echo $names . ': ' . round($avg, 1) . "/10<br>";
        }
    ?>
</body>
</html>