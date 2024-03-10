<?php
    for ($i = 0; $i<=100; $i++){
        if ($i%2==0){
            echo $i.PHP_EOL;
        }

    }
    $list = [1, 23, 44, 88, 13, 11, 7, 8];
    foreach($list as $i){
        if ($i%2==0){
            echo $i.PHP_EOL;
        }
    }


?>