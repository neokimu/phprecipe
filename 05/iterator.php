<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>イテレータ</title>
    </head>
    <body>
        <?php

        class SimpleClass {

            public $property0 = 'zero';
            public $property1 = '1st';
            public $property2 = '2nd';
            private $property3 = '3rd';
            public $doNotShowThisProperty = 'dummy!';

        }
        
        $simple = new SimpleClass();
        echo '<p>SimpleClassをインスタンス化して、foreachでデータを表示する：<br>';
        foreach ($simple as $key => $value) {
            echo $key . ' : ' . $value . '<br>';
        }
        echo '</p>';
        
        class IteratableClass implements Iterator {

            public $property0 = 'zero';
            public $property1 = '1st';
            public $property2 = '2nd';
            private $property3 = '3rd';
            public $doNotShowThisProperty = 'dummy!';
            private $position;

            public function current() {
                $valuename = 'property' . $this->position;

                return $this->$valuename;
            }

            public function key() {
                return 'property' . $this->position;
            }

            public function next() {
                $this->position++;
            }

            public function rewind() {
                $this->position = 0;
            }

            public function valid() {
                $valuename = 'property' . $this->position;
                return isset($this->$valuename);
            }

        }

        $iteratable = new IteratableClass();
        echo '<p>IterableClassのインスタンスに対してforeach構文を使用する：<br>';
        foreach ($iteratable as $key => $value) {
            echo $key . ' : ' . $value . '<br>';
        }
        echo '</p>';
        ?>
    </body>
</html>
