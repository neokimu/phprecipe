<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>複数選択されたデータを検索したい</title>
    </head>
    <body>
        <?php
        // h()関数を読み込みます。
        require_once '../lib/h.php';
        
        if (isset($_POST['data']) && count($_POST['data']) > 0) {
            require_once __DIR__ . '/../conf/database_conf.php';
            
            try {
                $db = new PDO($dsn, $dbUser, $dbPass);
                $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $data = $_POST['data'];
                
                $where_in = implode(', :id', array_keys($data));
                $sql = 'SELECT * FROM hobby WHERE id IN (:id' . $where_in .')';
                $prepare = $db->prepare($sql);
                
                for ($i = 0; $i < count($data); $i++) {
                    $prepare->bindValue(':id' . $i, (int) $data[$i], PDO::PARAM_INT);
                }
                $prepare->execute();
                $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
                
                echo '<p>選択されたデータ番号：' . h(implode(', ', $data)) . '</p>';
                
                echo '<p>該当した検索結果：<br>';
                foreach ($result as $row) {
                    echo h($row['id']) . ' : ' . h($row['name']) . '<br>';
                }
                echo '</p>';
                
            } catch (PDOException $e) {
                echo 'エラーが発生しました。内容：　' . h($e->getMessage());
            }
        }
        ?>
        <p>趣味を選択してください</p>
        <form method="post" action="multi_search.php">
            <input type="checkbox" name="data[]" value="1">釣り&nbsp;
            <input type="checkbox" name="data[]" value="2">映画鑑賞&nbsp;
            <input type="checkbox" name="data[]" value="3">音楽鑑賞&nbsp;
            <input type="submit" value="送信する">
        </form>
    </body>
</html>
