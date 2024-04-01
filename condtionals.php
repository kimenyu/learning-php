<?php

    // if(5 > 10){
    //     echo '5 is less than 10';
    // } else {
    //     echo '5 is not less than 10';
    // }

    // $t = date("H");

    // if($t < "10"){
    //     echo "Have a good morning!";
    // } elseif($t < "20"){
    //     echo "ave a good day!";
    // } else {
    //     echo "Have a good night!";
    // }



    $favColor = 'yellow';
    switch($favColor){
        case 'red':
            echo 'Your favorite color is red';
            break;
        case 'blue':
            echo 'Your favorite color is blue';
            break;
        case 'green':
            echo 'Your favorite color is green';
            break;
        default:
            echo 'Your favorite color is neither red, blue, nor green';
    }