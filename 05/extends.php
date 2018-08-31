<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>クラスの継承</title>
    </head>
    <body>
        <?php
        // 親クラス
        class SuperClass 
        {
            public function getSuperData() 
            {
                return '親クラス';
            }
        }
        
        // 子クラス
        class SubClass extends SuperClass 
        {
            public function getSubData() 
            {
                return '子クラス';
            }
        }
        
        function h($string) 
        {
            return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
        }
        
        $obj = new SubClass();
        
        echo h($obj->getSuperData()) . '<br>';
        echo h($obj->getSubData()) . '<br>';
        
        ?>
    </body>
</html>
