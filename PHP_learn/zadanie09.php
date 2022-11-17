<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>fun times php</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="container">

    <div class="page-header">
        <h1 class="text-muted">

        </h1>
    </div>


    <?php 

        require 'function.php';

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

        // $trulo = 'Ahoj, truľo.';
        


        pozdrav ( 'Vašo ');

        // pre_r ($numbers);


        $recept = [
            'web', 
            'gule', 
            'vajcia',
        ];

        // good_link ($recept);



        $pocet_produktov = 5;
        $cena_jedneho = 6;
       
        // how_much( $pocet_produktov, $cena_jedneho );
        echo '<br>';

        $numbers = [ 2, 3, 4, 5, 6, 7, 8, 9, 44];

        pre_r ($numbers);

        plus ($numbers);
        echo '<br>';
        second ( $numbers );
        echo '<br>';
        big ($numbers);
         echo '<br>';

         $cislo = 253.644;
         $cislo2=6.55;
         $zlava = 13.3;
         
         $sum = sum($cislo,$cislo2);

        //    discount ($cislo , $zlava);
        echo '<br>';

        // if ($zlava)
        // {
        //     $sum = discount ($sum , $zlava);
        // }
        echo '<br>';

        //    echo format ($sum) ;

        echo '<br>';

            $atts = [
            'title' => 'totojelink',
            'class' => 'red'
            ];

        

        $url = 'http://brm.sk';
        echo  '<p>ked chces googlit, pouzi tento kvalitny '.anchor($url,'kvalitny blog',$atts) .' </p>';

        // $base_url = 'http://localhost:8888/PHP_learn/zadanie09.php';
           $date= '12-28-1982';
           
        echo redirect($date);

        

   ?>



      </body>

</html>