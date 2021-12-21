<!-- ## Snack 6

Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack6</title>
    
    <style>
        .grey{
            background-color: gray;
        }
        .green{
            background-color: green;
        }
    </style>

    <?php
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];

        $keys = array_keys($db);
        $teachers = $db['teachers'];
        $pms = $db['pm'];
    ?>

</head>
<body>
    <!-- versione 2 - codice semplificato -->
    <!-- <div class="grey">
        <h2>Teachers:</h2>
        <?php
            // for ($j=0; $j < count($teachers); $j++) { 
            //     $teacher = $teachers[$j];
            //     echo $teacher['name'] . ' ';
            //     echo $teacher['lastname'] . '<br>';
            // }
        ?>
    </div>
    <div class="green">
        <h2>PM:</h2>
        <?php
            // for ($j=0; $j < count($pms); $j++) { 
            //     $pm = $pms[$j];
            //     echo $pm['name'] . ' ';
            //     echo $pm['lastname'] . '<br>';
            // }
        ?>
    </div> -->

    <!-- versioe 3 - utilizzo foreach -->
    <div class="grey">
        <h2>Teachers:</h2>
        <?php
            foreach ($teachers as $teacher) {
                echo $teacher['name'] . ' ';
                echo $teacher['lastname'] . '<br>';
            }
            
        ?>
    </div>
    <div class="green">
        <h2>PM:</h2>
        <?php
            foreach ($pms as $pm) {
                echo $pm['name'] . ' ';
                echo $pm['lastname'] . '<br>';
            }
        ?>
    </div>

    <!-- prima versione -->
    <?php
        // for ($i=0; $i < count($keys); $i++) { 
        //     $key = $keys[$i];
        //     if($key === 'teachers'){
        //         echo '<div class="grey">' . $key . '<br>';

        //         for ($j=0; $j < count($db[$key]); $j++) { 
        //             echo $db[$key][$j]['name'] . ' ';
        //             echo $db[$key][$j]['lastname'] . '<br>';
        //         }

        //         echo '</div>';
        //     }

        //     if($key === 'pm'){
        //         echo '<div class="green">' . $key .  '<br>';
                
        //         for ($j=0; $j < count($db[$key]); $j++) { 
        //             echo $db[$key][$j]['name'] . ' ';
        //             echo $db[$key][$j]['lastname'] . '<br>';
        //         }

        //         echo '</div>';
        //     }
        // }
    ?>
</body>
</html>
