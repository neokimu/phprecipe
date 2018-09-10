<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>抽象クラス</title>
    </head>
    <body>
        <?php
        // 圖形クラスを抽象クラスとして定義します。
        abstract class Figure
        {
            public abstract function getSize();
        }
        
        class Circle extends Figure
        {
            private $radius;
            
            public function __construct($radius)
            {
                $this->radius = $radius;
            }

            public function getSize() 
            {
                $size = $this->radius * $this->radius * pi();
                return round($size, 3);
            }
        }
        
        class Triangle extends Figure
        {
            private $base;
            private $height;
            
            public function __construct($base, $height)
            {
                $this->base = $base;
                $this->height = $height;
            }

            public function getSize() 
            {
                $size = $this->base * $this->height / 2;
                return round($size, 3);
            }                                
        }
        
        $figures = array();
        $figures[] = new Circle(5);
        $figures[] = new Triangle(10, 5);
        
        foreach ($figures as $figure) 
        {
            echo get_class($figure) . ' : ' . h($figure->getSize()) . '<br>';
        }
        
        function h($string) {
            return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
        }
        ?>
    </body>
</html>
