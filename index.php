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

<!-- ********************************SNACK 2********************************************************** -->
    <h2>Snack 2</h2>
<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
    che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
    Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

    <?php 
        $userName = $_GET['name'];
        $userMail = $_GET['email'];
        $userAge = $_GET['age'];

        if ( (strlen($userName)>3) && 
        (strpos($userMail, '@')>0 && strpos($userMail, '.')>3) && 
        (is_numeric($userAge)) ) {
                echo "Accesso riuscito!";
            } else{
                echo "Accesso negato!";
            };
    ?>

<!-- ********************************SNACK 3********************************************************** -->
    <h2>Snack 3</h2>
<!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta  -->
    <?php
        $numbers= [];

        
        while (count($numbers) < 15 ){
        $randomNumber = rand(1, 50);
        if (!in_array($randomNumber, $numbers)){
                $numbers[] = $randomNumber;
        };
        };
        
        var_dump($numbers);
    ?>

<!-- ********************************SNACK 4********************************************************** -->
    <h2>Snack 4</h2>
 <!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
    Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

    <?php 
        $paragraph = "Penso che all’epoca stessi cercando una sfida. Eravamo nel pieno della Guerra Fredda. I lettori, i giovani lettori, odiavano profondamente la guerra, non sopportavano i militari. Quindi decisi di realizzare un eroe che fosse l’incarnazione di tutto questo. Era un fabbricante di armi, produceva armamenti per l’Esercito, era ricco ed era un capitalista. All’epoca, pensai che sarebbe stato divertente sviluppare un personaggio che nessun, potenzialmente, avrebbe apprezzato, che nessuno dei nostri lettori avrebbe compreso, con la precisa missione di farglielo piacere e farli appassionare. E divenne popolare. Howard Hughes era uno degli uomini più interessanti di quel tempo. Era un inventore, un avventuriero, un miliardario, un donnaiolo e infine un folle. Tony Stark avrebbe dovuto essere un Howard Hughes, senza la sua follia.";
        $paragraphSplit = explode('.', $paragraph);
        var_dump($paragraphSplit);
    ?>
    <h5>Paragrafo:</h5>
    <p>
        <?php echo $paragraph ?>
    </p>

    <h5>Paragrafo suddiviso:</h5>
    <?php for($i=0; $i < count($paragraphSplit); $i++){ ?>    
        <p>
            <?php echo $paragraphSplit[$i]; ?>
        </p>
    <?php }; ?> 

<!-- ********************************SNACK 5********************************************************** -->
    <h2>Snack 5</h2>
<!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
    Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

    <?php
        $students = [
            [
                'firstName' => 'Marco',
                'lastName' => 'Rossi',
                'marks' => [
                        'italiano' => 8,
                        'matematica' => 6,
                        'inglese' => 6,
                        ],
            ],
            [
                'firstName' => 'Chiara',
                'lastName' => 'Casale',
                'marks' => [
                        'italiano' => 7,
                        'matematica' => 9,
                        'inglese' => 8,
                        ],
            ],
            [
                'firstName' => 'Mario',
                'lastName' => 'Del Vecchio',
                'marks' => [
                        'italiano' => 5,
                        'matematica' => 4,
                        'inglese' => 5,
                        ],
            ],
            [
                'firstName' => 'Sara',
                'lastName' => 'La Marca',
                'marks' => [
                        'italiano' => 6,
                        'matematica' => 6,
                        'inglese' => 7,
                        ],
            ],
        ];
    ?>

    <?php for($i=0; $i< count($students); $i++){ ?>

        <p> 
            Nome: <?php echo $students[$i]['firstName']; ?> <br>
            Cognome : <?php echo $students[$i]['lastName']; ?> <br>
            Voto: <?php 
                $marksAverage = ($students[$i]['marks']['italiano']+
                            $students[$i]['marks']['matematica']+
                            $students[$i]['marks']['inglese']) / 3;

                echo round($marksAverage, 2);
            ?>
        </p>

    <?php }; ?>
</body>
</html>