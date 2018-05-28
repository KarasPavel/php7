<?php

$file = fopen('D:\PHP-Advanced\HW3\text.txt', "r");
    $test = trim(fgets($file));
    if ($test != "") {
        $arr = explode(" ", $test);
        
        $fizz = $arr[0];
        $buzz = $arr[1];
        $length = $arr[2];
        
        $mass = range(1,$length);

    }
// print_r($mass);

// echo $fizz;
// echo $buzz;


function fizz_buzz($i){
    global $fizz;
    global $buzz;

    if ($i % $fizz == 0 && $i % $buzz==0 ){
        echo "FB";
    }
      elseif($i % $fizz== 0 ){
        echo "F";
    }
          elseif($i % $buzz== 0){
        echo "B";
    }

    else {echo "$i";}
    echo " ";
}

array_map("fizz_buzz",$mass);