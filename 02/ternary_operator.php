<!DOCTYPE html>

<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>三項演算子の使い方を知りたい</title>
    </head>
    <body>
        <?php
     
        $language = 'Jp';
        // 三項演算子の結果を変数に代入します。
        $message = ($language == 'Jp') ? '日本語' : 'Japanese';
        echo $message . '<br>';
        
        // 三項演算子の省略形です。
        $message = $message ?: 'メッセージは空';
        echo $message . '<br>';
        
        // $messageに空文字列を代入します。
        $message = '';
        $message = $message ?: 'メッセージは空';
        echo $message . '<br>';
        
        
        // 三項演算子とif文の比較
        
        function func1($number) {
            $number *= 100;
            echo $number;
        }
        
        function func2($number) {
            $number *= 200;
            echo $number;
        }
        
        $number = 10;   
  
        $numCheck = ($number > 0) ? func1($number) : func2($number); 
        
        
        if($number > 0){
            func1($number);
        } else {
            func2($number);
        }
            
        ?>
    </body>
</html>
