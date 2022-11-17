<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>fun times php</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="container">

    <div class="page-header">
        <h1 class="text-muted">fun times php</h1>
    </div>

    <?php

	$directors = [
    [
        'id' => 1,
        'first_name' => 'Edgar',
        'last_name' => 'Wright',
        'country' => 'United Kingdom',
        'birthdate' => '1974-04-18',
    ],
    [
        'id' => 2,
        'first_name' => 'Jim',
        'last_name' => 'Jarmusch',
        'country' => 'United States',
        'birthdate' => '1953-01-22',
    ],
    [
        'id' => 3,
        'first_name' => 'Leos',
        'nick_name' => [ 
                         'boss' , 
                         'king' ,
                         'girl'
                        ],
        'last_name' => 'Carax',
        'country' => 'France',
        'birthdate' => '1960-11-22',
        
    ],
    [
        'id' => 4,
        'first_name' => 'Ingmar',
        'last_name' => 'Bergman',
        'country' => 'Sweden',
        'birthdate' => '1918-07-14',
    ],
    [
        'id' => 5,
        'first_name' => 'Andrej',
        'last_name' => 'Tarkovskij',
        'country' => 'Russia',
        'birthdate' => '2000-10-10',
    ],
];

    echo '<pre>';
    print_r($directors);
    echo '</pre>';

    foreach ($directors as $name) {

        echo "<h3> ${name['first_name']} </h3>";
         
    

    if ( isset ($name['nick_name'])&& is_array($name['nick_name']))

        echo implode ('.', $name ['nick_name']);

    }

    for ( $i = 0; $i <= 20; $i++) {
        echo '<p>'. $i .'</p>';
    }
	?>

</body>

</html>