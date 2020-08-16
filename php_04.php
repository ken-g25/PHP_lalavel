<!---->課題1
<?php
    
    function result ($i) {
        echo $i * 2;
    }
    result(5);
?>
<!---->課題2
<?php

    function sum($a, $b) {
        echo $a + $b;
    }
    sum(5,3);
    
?>
<!---->課題3
<?php 
    $array = array(1, 3, 5 ,7, 9);
    function multiple_array($array) {
        $result = 1;
        foreach($array as $arr){
            
            $result *= $arr;    
        }
        return $result;
    }
    
    echo multiple_array($array);
    //     // $arr = array(1, 3, 5 ,7, 9) ;
    //     echo $arr[0] * $arr[1] * $arr[2] * $arr[3] * $arr[4];
    // }
    // result();
?>

<!--function multiple_array($array){-->
<!--  hogehoge-->
<!--  return hogehoge;-->
<!--}-->

<!---->課題4
<?php
    function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
 //どうしたらいいかわからない・・・・
    if ($max_number < $a) {
        $max_number = $a;
    }
        
    }

    return $max_number;
 }
     max_array(3,6,9);
 
 ?>