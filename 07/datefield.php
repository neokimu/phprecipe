<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>日付フィールドを使いたい</title>
    </head>
    <body>
        <?php
        // h()関数を読み込みます。
        require_once '../lib/h.php';
        
        echo '<p>結果<br>';
        echo '日付は？：';
        if (isset($_POST['date'])) {
            $date = new DateTime(trim($_POST['date']));
            $year = $date->format('Y');
            $month = $date->format('m');
            $day = $date->format('d');
            if(checkdate($month, $day, $year)===false){
                die('日付として正しくありません');
            } 
            echo h($_POST['date']);
        }
        echo '</p><hr>';
        ?>
        <form method="post" action="datefield.php">
            <p>日付
                <input type="date" name="date">
                <input type="submit" value="送信する">
            </p>
        </form>
    </body>
</html>