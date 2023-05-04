<?php
    $games = [
        [
            'home' => 'Olimpia Milano',
            'away' => 'Cantu',
            'home_points' => '55',
            'away_points' => '60'
        ],
        [
            'home' => 'Milan',
            'away' => 'Inter',
            'home_points' => '2',
            'away_points' => '0' 
        ]
    ]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <?php foreach($games as $game):?>
        <p><?= $game['home']. '- '.$game['away'].' | '.$game['home_points'].' - '.$game['away_points']?></p>
    <?php endforeach; ?>
</body>
</html>