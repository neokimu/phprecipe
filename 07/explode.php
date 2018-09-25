<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>複数の検索キーワードで検索したい</title>
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
        
        require_once '../lib/h.php';
        require_once '../lib/checkInput.php';
        
        $_POST = checkInput($_POST);
        
        $data = isset($_POST['data']) ? trim($_POST['data']) : '';
        
        $dataList = explode(' ', mb_convert_kana($data, 's'));
        $dataList = array_filter($dataList, function ($val) {
            return $val != ''; 
        });
        
        sort($dataList);
        
        if(!empty($dataList)) {
            require_once __DIR__ . '/../conf/database_conf.php';
        try {
        // MySQLデータベースに接続します☆レシピ260☆（データベースに接続したい）。
        $db = new PDO($dsn, $dbUser, $dbPass);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // SQL文を準備します。
        // 検索文字列の数だけ「:data0」「:data1」…のようにプレースホルダを用意します。
        $where = '';
        foreach ($dataList as $key => $value) {
          $where .= sprintf(' AND data LIKE :data%d', $key);
        // SQLiteの場合は、エスケープ文字をAND結合ごとに指定する必要があります。
        // ここではエスケープ文字を「\」に設定しています。
        //      $where .= " ESCAPE '\\'";
        }
        $sql = 'SELECT * FROM search WHERE 1' . $where;

        $prepare = $db->prepare($sql);
        // SQL文のプレースホルダに値をバインドして、クエリを実行します。
        for ($i = 0; $i < count($dataList); $i++) {
        // 検索文字列の中のワイルドカード文字「_」「%」およびエスケープ文字「\」を
        // エスケープします。
          $like = preg_replace('/([_%\\\\])/u', '\\\\$1', $dataList[$i]);
          $prepare->bindValue(':data' . $i, '%' . $like . '%', PDO::PARAM_STR);
        }
        $prepare->execute();
        $result = $prepare->fetchAll(PDO::FETCH_ASSOC);

        if (count($result) == 0) {
            echo '<p>「' . h($data) . '」はデータベースに登録がありません。</p>';
        } else {
            echo '<p>「' . h($data) . '」はデータベースに登録がありました。</p>';

            echo '<p>検索結果</p>';
            echo '<table>';
            echo '  <tr>';
            echo '    <th>ID</th>';
            echo '    <th>データ</th>';
            echo '  </tr>';
                foreach ($result as $row) {
                    echo '  <tr>';
                    echo '    <td>' . h($row['id']) . '</td>';
                    echo '    <td>' . h($row['data']) . '</td>';
                    echo '  </tr>';
                }
          echo '</table>';
        }

        $sql = 'SELECT * FROM search';
        $prepare = $db->prepare($sql);
        $prepare->execute();
        $result = $prepare->fetchAll(PDO::FETCH_ASSOC);

        echo '<p>データベースの内容一覧</p>';
        echo '<table>';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>データ</th>';
        echo '</tr>';

        foreach ($result as $row) {
          echo '<tr>';
          echo '<td>' . h($row['id']) . '</td>';
          echo '<td>' . h($row['data']) . '</td>';
          echo '</tr>';
        }
        echo '</table>';

    // エラーが発生した場合、PDOException例外がスローされるのでキャッチします。
      } catch (PDOException $e) {
        echo 'エラーが発生しました。内容: ' . h($e->getMessage());
      }
    }
    ?>
    <p>AND検索したい文字列を入力してください(スペース区切り)</p>
    <form method="post" action="explode.php">
        <input type="search" name="data">
        <input type="submit" value="検索する">
    </form>
    </body>
</html>
