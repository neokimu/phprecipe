<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ArrayObjectオブジェクト、Countableインターフェイス</title>
    </head>
    <body>
        <?php
        class MyArrayObject extends ArrayObject
        {
            public function count() 
            {
                echo 'count処理が呼び出されました：';
                return parent::count();
            }
        }
        
        $arrayobj = new MyArrayObject(array('first', 'second')); 
        
        $arrayobj[] = 'third';
        $arrayobj[] = array('4th', '5th');
        
        echo '<pre>';
        print_r($arrayobj);
        echo '</pre>';
        
        $arrayobj['key'] = '6th';
        unset($arrayobj[3]);
        
        echo '<ul>';
        foreach ($arrayobj as $key => $value) {
            echo '<li>' . $key . ' : ' . $value . '</li>';
        }
        echo '</ul>';
        
        echo '<p>';
        echo '$arrayobj[1] : ' . $arrayobj[1];
        echo '<br>';
        echo '$arrayobj[\'key\'] : ' . $arrayobj['key'];
        echo '</p>';
        
        echo count($arrayobj);
        ?>
    </body>
</html>
