<?php

function pozdrav ()
{
    echo 'Ahoj, Vašo, ty truľo.';

};

function pre_r ($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
};

// function good_link ($polo)
// {
//    echo '<a href="'.$polo [1].'.php?page='.str_replace (' ','-', strtoupper ($data [1x])).'">Web</a>';
// }

function how_much ($number1 , $number2)
{  
        if ($number1 > $number2) {
            echo $number1;
        }
        else {
            echo $number2;
        }       
};

function plus ($numbers)
{
     echo array_sum ($numbers);

    return ($numbers);
};

function second ($second_number)
{
    foreach ($second_number as $value) 
            if ($value % 2) 
            echo $value , '/'; 
         
};

function big ($big)
{
    echo max ($big);

    // foreach ($big as $value) 
    //     if ($value) {
    //         # code...
    //     }

    return ($big);

}

function sum ($a, $b)
{
    return $a * $b;

}

function discount ($cislo, $zlava)
 {
    $total = $cislo - $cislo * ($zlava / 100);
    echo ($total), '€';

    return ($total);

 }

 function format ($coupon) 
 {
    return number_format($coupon , 2, ',', '&nbsp;');
 }

 function anchor ($link,$link2,$art)
 {
    $url='<a href='.$link.'>'.$link2.'</a>';

    return ($url);
 }

 function redirect($date)
 {
    $sk = date_create($date);
    // date_format($date, 'Y-m-d ');
    return($sk);

 }


?>