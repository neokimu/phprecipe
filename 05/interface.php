<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>インターフェイス</title>
    </head>
    <body>
        <?php
        require_once '../lib/h.php';
        require '../lib/autoload.php';
        
        $test = new InterfaceSample();
        $test->setNumeric('first', 1);
        $test->setNumeric('second', 2);
        $test->setNumeric('third', '3rd');
        
        echo '<p>';
        foreach ($test->getTexts() as $text)
        {
            echo h($text) . '<br>';
        }
        echo '</p>';
        
        $test->multiply('second');
        $test->multiply('third');
        
        echo '<p>';
        foreach ($test->getTexts() as $text)
        {
            echo h($text) . '<br>';
        }
        echo '</p>';
        ?>
        ?>
    </body>
</html>
