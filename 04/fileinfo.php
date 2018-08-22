<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ファイルの種類を判定したい</title>
    </head>
    <body>
        <?php
        // 判定するファイルを設定します。
        $file1 = '../data/pdf-image.jpg';
        $file2 = '../data/imagecopyresampled.png';
        $file3 = '../data/read_csv.csv';
        
        // finfoオブジェクトをnew演算子で作成し、関数に代入します。
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        
        // finfoオブジェクトのfile()メソッドを呼び出し、指定したファイルのMIMEタイプを
        // 取得し表示します。
        echo basename($file1) . ': ' . $finfo->file($file1) . '<br>';
        echo basename($file2) . ': ' . $finfo->file($file2) . '<br>';
        echo basename($file3) . ': ' . $finfo->file($file3) . '<br>';        
        ?>
    </body>
</html>
