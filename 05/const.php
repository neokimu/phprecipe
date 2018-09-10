<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>クラス定数</title>
    </head>
    <body>
        <?php
        // クラス定義を持つクラスを定義します。
        class ConstClass
        {
            const CONSTANT = '定数の値';
            
            public function getConstValue() {
            // クラス内でクラス定数を取得する場合は「static::」を使用します。
                return 'getConstValue()メソッド ' . static::CONSTANT;
            }
        }
        
        // クラス定義を表示します。
        echo 'ConstClass::CONSTANT: ' . h(ConstClass::CONSTANT) . '<br>';
        
        $obj = new ConstClass();
        echo '$obj->getConstValue(): ' . h($obj->getConstValue()) . '<br>';
        
        function h($string) {
            return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
        }
        ?>
    </body>
</html>
