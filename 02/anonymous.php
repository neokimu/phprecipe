<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>無名関数</title>
    </head>
    <body>
        <?php
        $birth = array(92, 91, 90, 80, 88,72);
        
        $showa = function ($number){
            if($number < 90){
                return array($number);
            }
        };
        
        $showa = array_filter($birth, $showa);
        echo '<p>昭和</p>';
        foreach ($showa as $data) {
            echo $data . '<br>';
        }
        
        $heisei = array_filter ($birth,
            function($number){
                if($number>=90){
                    return array($number);
                }
            } 
            );
        echo '<p>平成</p>'; 
        foreach ($heisei as $data) {
            echo $data . '<br>';
        }
        ?>
    </body>
</html>
