<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>fun times php</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="container">

    <div class="page-header">
        <h1 class="text-muted">Pyramida</h1>
    </div>


    <?php 

    echo '<p class="center">';
    
    $rows = 0;

    for ($i = 10; $i > $rows ; $i-- ) { 
            $tmp = '';
        for ($j = 1; $j <= $i ; $j++ ) {
                $tmp .= ' * '; 
            }
        
        echo "$tmp<br>";
    }

     $rows = 10;

    for ($i = 1; $i <= $rows ; $i++ ) { 
            $tmp = '';
        for ($j = 1; $j <= $i ; $j++ ) {
                $tmp .= ' * '; 
            }
        
        echo "$tmp<br>";
    }

    echo '</p>';

    echo '<div>';

    $dino = [

            'br' => 'golll',
            'gr' =>' brana',
            'gl' => 'bgl',
        ];
    

           $json = json_encode ($dino);

            echo '<pre>';
            echo print_r ($dino);
            echo print_r ($json);
            echo '</pre>';
   
            $dino = json_decode ($json);

             echo '<pre>';
            echo print_r ($dino);
            echo '</pre>';

            echo $dino->br;
            echo $dino->gl;
            
        // echo $gol->br ;

           
    echo '</div>';
          
    echo gettype ($json);
   
    ?>



      </body>

</html>