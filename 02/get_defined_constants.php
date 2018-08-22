<!DOCTYPE html>

<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>定数済みの定数を知りたい</title>
    </head>
    <body>
        <?php
        define('TEST', 'PHP逆引き');
        const RECIPE = 'レシピ';
        
        echo '<p>定義の済み定数</p>';
        echo '<pre>';
        // 引数にtrueを指定すると、カテゴリ別の多次元配列を返します。
        print_r(get_defined_constants(true));
        echo '</pre>';
        
        echo '<p>CONSTANTが定義済みがどうかを調べる: ';
        if(defined('CONSTANT')){
            echo CONSTANT;
        } else {
            echo 'CONSTANTは定義されていません。';
        }
        echo '</p>';
        echo '<p>RECIPEが定義済みがどうかを調べる: ';
        if(defined('RECIPE')){
            echo RECIPE;
        } else {
            echo 'RECIPEは定義されていません。';
        }
        echo '</p>';
        ?>
    </body>
</html>
