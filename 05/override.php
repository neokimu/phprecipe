<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>オーバーライド</title>
    </head>
    <body>
        <?php
        // 親クラスとなるSuperClassを定義します。
        class SuperClass
        {
            public $a = '親クラスのプロパティA';
            public $b = '親クラスのプロパティB';
            
            public function show() 
            {
                return '親クラスのメソッド: ' . $this->a . 'と' . $this->b;
            }
        }
        
        class SubClass extends SuperClass
        {
            public $a = '子クラスのプロパティ A';
            
            public function show() {
                return '子クラスのメソッド: ' . $this->a . 'と' . $this->b;
            }
        }
        
        function h($string) 
        {
            return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
        }
        
        $obj = new SubClass();
        echo h($obj->show());
        ?>
    </body>
</html>
