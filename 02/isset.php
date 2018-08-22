<!DOCTYPE html>
<html lang="jaS">
    <head>
        <meta charset="UTF-8">
        <title>変数がセットされているか調べる</title>
    </head>
    <body>
        <?php
        $a = 'ABC';
        $b = null;
        $c['a'] = 123;
        
        if(isset($a)){
            echo '$a はセットされています。<br>';
        }else{
            echo '$a はセットされていません。<br>';
        }
        
        if(isset($b)){
            echo '$b はセットされています。<br>';
        }else{
            echo '$b はセットされていません。<br>';
        }
        
        if(isset($c['a'])){
            echo '$c['."'a'".'] はセットされています。<br>';
        }else{
            echo '$c['."'a'".'] はセットされていません。<br>';
        }
        
        // unset($c['a']);
        
        if(isset($c['a'])){
            echo '$c['."'a'".'] はセットされています。<br>';
        }else{
            echo '$c['."'a'".'] はセットされていません。<br>';
        }
        
        if(isset($c['b'])){
            echo '$c['."'b'".'] はセットされています。<br>';
        }else{
            echo '$c['."'b'".'] はセットされていません。<br>';
        }
        
        if(isset($d)){
            echo '$d はセットされています。<br>';
        }else{
            echo '$d はセットされていません。<br>';
        }
        ?>
    </body>
</html>
