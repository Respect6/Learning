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

	$one = 
    [
        1,
        'Edgar',
        'Wright',
        'United Kingdom',
        '1974-04-18',
    ];

    $two =
    
    [
        2,
        'Jim',
        'Jarmusch',
        'United States',
        '1953-01-22',
    ];

    $three =
    
    [
        3,
        'Leos',
        'Carax',
        'France',
        '1960-11-22',
    ];

    $four =
    
    [
        4,
        'Ingmar',
        'Bergman',
        'Sweden',
        '1918-07-14',
    ];

    $five =
    
    [
        5,
        'Andrej',
        'Tarkovskij',
        'Russia',
        '2000-10-10',
    ];


    // // unset( $one[2] );
    // $one [2] = '';
    // $one = array_values(array_filter($one));

    
        
        echo $one[1].'<span>   </span>';
        echo $one[2]
        .'<br>';
        echo $two[1].'<span>   </span>';
        echo $two[2]
        .'<br>';
        echo $three[1].'<span>   </span>';
        echo $three[2]
        .'<br>';
        echo $four[1].'<span>   </span>';
        echo $four[2]
        .'<br>';
        echo $five[1].'<span>   </span>';
        echo $five[2]
        .'<br>';
        
        

	    echo '<pre>';
		print_r( $one);
		echo '</pre>';

        echo '<ul class="list-group text-left">';
			foreach ($one as $key => $value) {
				// if ( ! $value ) continue;
		echo "<li class=\"list-group-item\"><small class=\"text-info\">$key &hellip;</small> $value</li>";
		}
		echo '</ul>';

        echo '<pre>';
		print_r( $two);
		echo '</pre>';

        echo '<ul class="list-group text-left">';
        foreach ($two as $key => $value) {
            if ( ! $value ) continue;
        echo "<li class=\"list-group-item\"><small class=\"text-info\">$key &hellip;</small> $value</li>";
        }
        echo '</ul>';

        echo '<pre>';
		print_r( $three);
		echo '</pre>';

        echo '<ul class="list-group text-left">';
        foreach ($three as $key => $value) {
            if ( ! $value ) continue;
        echo "<li class=\"list-group-item\"><small class=\"text-info\">$key &hellip;</small> $value</li>";
        }
        echo '</ul>';

        echo '<pre>';
		print_r( $four);
		echo '</pre>';

        echo '<ul class="list-group text-left">';
        foreach ($four as $key => $value) {
            if ( ! $value ) continue;
        echo "<li class=\"list-group-item\"><small class=\"text-info\">$key &hellip;</small> $value</li>";
        }
        echo '</ul>';

        echo '<pre>';
		print_r( $five);
		echo '</pre>';

        echo '<ul class="list-group text-left">';
        foreach ($five as $key => $value) {
            if ( ! $value ) continue;
        echo "<li class=\"list-group-item\"><small class=\"text-info\">$key &hellip;</small> $value</li>";
        }
        echo '</ul>';
        

                   
        







		
	?>

</body>

</html>