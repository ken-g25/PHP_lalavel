<?php
    $name = "Kenji Manjome";
    if ($name = "Kenji Manjome") {
        echo "私は".$name."です。";        // code...
    }else {
        echo $name."ではありません";
    }
?>

<?php
    $total = 0;
    for ($i = 1; $i <= 10000; $i++) {
         $total = $total + $i ;
    }
    echo $total;
?>

<?php
    $fruits = array("apple","banana","orenge","peach","kiwi");
    foreach ($fruits as $fruit) {
        echo $fruit ;
    }
?>

<?php
    /* for文の始めの値を定義する /
    
    /* for文の終わりの値を定義する */
    $start = 1;
    $end = 100;

    for($i = 1; $i < 100; $i++){

        // 5で割り切れたら{}内を実行する
        if($i % 5 == 0){
           echo $i;
           echo "\n";
        }
}


?>