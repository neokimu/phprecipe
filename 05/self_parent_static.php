<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>self, parent, static</title>
    </head>
    <body>
        <?php
        // h()関数を読み込みます。
        require_once '../lib/h.php';
        
        // 定数CONST_VALUEのみを持ったFirstクラスを定義します。
        class First
        {
            const CONST_VALUE = 'first';
        }
        
        
        // Firstクラスを継承し、show()メソッドを追加したSecondクラスを設定します。
        class Second extends First
        {
            const CONST_VALUE = 'second';
         
        // parent, self, staticそれぞれの定数CONST_VALUEを表示します。    
            public function show() 
            {
                echo h(parent::CONST_VALUE) . ',';
                echo h(self::CONST_VALUE) . ',';
                echo h(static::CONST_VALUE) . ',';
            }
        }
        
        // Firstクラスを継承したThirdクラスを設定します。
        class Third extends Second
        {
            const CONST_VALUE = 'third';
        
        // 新クラスのshow()メソッドを呼びします。    
            public function show() 
            {
               parent::show();
            }
        }
        
        echo '<p>';
        echo 'Secondクラスのshow()メソッドを呼びます：' . '<br>';
        $second = new Second();
        $second->show();
        echo '</p>';
        
        echo '<p>';
        echo 'Thirdクラスのshow()メソッドを呼びます：' . '<br>';
        $third = new Third();
        $third->show();
        echo '</p>';
        ?>
    </body>
</html>
