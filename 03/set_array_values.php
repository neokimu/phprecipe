<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>配列の値を一度に複数へセットしたい</title>
    </head>
    <body>
        <?php
        $data[] = ['1', '1', '25'];
        $data[] = ['2', '2', '25'];
        $data[] = ['3', '3', '25'];
        
        echo '<p>元の配列: ';
        print_r($data);
        echo '</p>';
        
        // $id, $name, $ageにそれぞれ値をセットします。
        foreach ($data as $value) {
            list($id, $name, $age) = $value;
            
            echo '<p>ID($id): ' . $id . '</p>';
            echo '<p>名前($name): ' . $name . '</p>';
            echo '<p>年齢($age): ' . $age . '</p>';
            }
        ?>
    </body>
</html>
