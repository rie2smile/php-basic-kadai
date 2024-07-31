<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
           
        ?>
    </p>

    <p>
    <?php
    // 配列を定義します。
    $nums = array (15, 4, 18, 23, 10);
    
     // ソートの順序を決定します。'asc'は昇順、'desc'は降順を意味します。
     $order = 'asc'; // 'asc' または 'desc' に変更できます。

    // ソート順序に応じた処理を行います。
    if ($order === 'asc') {
        echo "昇順（小さいもの順）にソートします。<br>";
        sort($nums);
    } else if ($order === 'desc') {
        echo "降順（大きいもの順）にソートします。<br>";
        rsort($nums);
    } else {
        echo "無効なソート順序です。'asc' か 'desc' を指定してください。<br>";
    }
 
     // ソートされた配列を出力します。
     foreach ($nums as $val) {
         echo "$val<br>";
     }

    /*
    $nums = array (15, 4, 18, 23, 10);
            
    echo "最初の並びは<br>";
    foreach ($nums as $value){
        echo $value;
        echo "<br>";
    }
    echo "です。<br>";

    echo '<br>';

    echo "降順（大きいもの順）にソートします。<br>";
    rsort($nums);
    foreach ($nums as $key => $val){
        echo "$val<br>";
    }

    echo '<br>';

    echo "昇順（小さいもの順）にソートします。<br>";
    krsort($nums);
    foreach ($nums as $key => $val){
        echo "$val<br>";
    }  
    */         
?>

    </P>

</body>

</html>