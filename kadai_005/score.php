<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP kadai_005</title>
 </head>
 
 <body>
     <p>
     <?php
 
        $score = array(80, 60, 55, 40, 100, 25, 80, 95, 30, 60);
        foreach($score as $value){
            echo  $value;
            echo "\n";
            }
        echo '<br>';
        echo '<br>';
        $sum = array_sum($score);
        echo '生徒の合計点数は' . $sum . '点です。'; 
        echo '<br>';
        echo '<br>';
        $count = count($score);
        echo '生徒の合計人数は' . $count . '人です。';
        echo '<br>';
        echo '<br>';
        echo '生徒の平均点数は' . $sum / $count . '点です。';
    ?>
  
     </p>
 </body>
 
 </html>
