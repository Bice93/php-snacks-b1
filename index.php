<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks Blocco 1</title>
</head>
<body>
<!-- ********************************SNACK 1********************************************************** -->
    <h2>Snack 1</h2>
<!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. 
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
    Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->
    <?php 
        $matches = [
            [
                'teamHome' => 'Olimpia Milano',
                'teamGuest' => 'Virtus Bologna',
                'pointsHome' => '90',
                'pointsGuest' => '33',
            ],
            [
                'teamHome' => 'Robur Varese',
                'teamGuest' => 'Cantù',
                'pointsHome' => '89',
                'pointsGuest' => '73',
            ],
            [
                'teamHome' => 'Partenope',
                'teamGuest' => 'Udine',
                'pointsHome' => '23',
                'pointsGuest' => '133',
            ],
            [
                'teamHome' => 'Scaligera Verona',
                'teamGuest' => 'Olimpia Pistoia',
                'pointsHome' => '105',
                'pointsGuest' => '155',
            ],
            [
                'teamHome' => 'B. Gallaratese',
                'teamGuest' => 'Athletic Genova',
                'pointsHome' => '137',
                'pointsGuest' => '180',
            ],
            [
                'teamHome' => 'GUF Palermo',
                'teamGuest' => 'Lazio',
                'pointsHome' => '80',
                'pointsGuest' => '103',
            ],
        ];
    ?>

    <h1>Calendario Lega Basket </h1>
    
    <?php for ($i=0; $i < count($matches); $i++){ ?>
        <h5>
            <?php 
                echo $matches[$i]['teamHome'] . 
                ' - ' . $matches[$i]['teamGuest'] . 
                ' | ' . $matches[$i]['pointsHome'] . 
                ' - ' . $matches[$i]['pointsGuest'];
            ?>
        </h5>
    <?php }; ?>
</body>
</html>