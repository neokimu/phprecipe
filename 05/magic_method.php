<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マジックメソッド</title>
    </head>
    <body>
        <?php
        // h()関数を読み込みます。
        require_once '../lib/h.php';
        
        // __toString()メソッドを待ったAnimalクラスを定義します。
        class Animal
        {
            public function __toString() {
        // 「__CLASS__」はマジック定義の1つで、現在のクラス名が定義されます。
                return 'これは' . __CLASS__ . 'クラスです。';
            }
        }
        
        // Animalクラスをインスタンス化します。
        $animal = new Animal();
        
        // オブジェクト$animalを文字列型にキャストして表示します。
        $str = (string)$animal;
        echo '<p>h($str): ' . h($str) . '</p>';
        
        // オブジェクト$animalを文字列型にキャストして表示します。
        echo '<p>h($animal): ' . h($animal) . '</p>';
        ?>
    </body>
</html>
