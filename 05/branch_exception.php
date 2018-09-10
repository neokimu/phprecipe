<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>例外を分けて処理</title>
    </head>
    <body>
        <?php
        class NullDataException extends Exception {}
        class ZeroDivisionException extends Exception {}
        
        function division($dividend, $divisor)
        {
            if (is_null($dividend) || is_null($divisor) ) {
                throw new NullDataException('nullを処理することはできません。');
            }
            
            if ($divisor === 0) {
                throw new ZeroDivisionException('0で割ることはできません。');
            }
            
            if (! is_numeric($dividend) || ! is_numeric($divisor)) {
                throw new Exception('文字列を処理することはできません。');
            }
            return $dividend / $divisor;
        }
        
        $array = array(
            array('dividend' => 10, 'divisor' => 2),
            array('dividend' => null, 'divisor' => 2),
            array('dividend' => 10, 'divisor' => 0),
            array('dividend' => 'ten', 'divisor' => 'two'),
        );
        
        foreach ($array as $dat) {
            echo '<p>';
            echo $dat['dividend'] . 'を' . $dat['divisor'] . 'で割ろうとすると';
            try {
                $result = division($dat['dividend'], $dat['divisor']);
                echo '結果は ' . $result . ' です。';
            } catch (NullDataException $e) {
                echo '当然ですが、' . $e->getMessage();
            } catch (ZeroDivisionException $e) {
                echo '値が不定となるため、' . $e->getMessage();
            } catch (Exception $e) {
                echo '残念ですが、' . $e->getMessage();
            }
            echo '</p>';
        }
        ?>
    </body>
</html>
