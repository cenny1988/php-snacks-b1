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
        .gray{
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
    ?>

</head>
<body>
    <?php
        $keys = array_keys($db);

        for ($i=0; $i < count($keys); $i++) { 
            $key = $keys[$i];
            if($key === 'teachers'){
                echo '<div class="gray">' . $key .  '</div>';
            }
            if($key === 'pm'){
                echo '<div class="green">' . $key .  '</div>';
            }

            for ($j=0; $j < count($db[$key]); $j++) { 
                echo $db[$key][$j]['name'] . ' ';
                echo $db[$key][$j]['lastname'] . '<br>';
            }

        }
    ?>
</body>
</html>
