<?php
// ページIDをセットします。
// ページIDごとにカウンタファイルを作る
// このファイルに直接アクセスした場合は「0」として記録
$pageID = !isset($pageID) ? 0: $pageID;

// 許可するページIDだけをカウントします。
// 許可するページIDの配列(直接アクセスを拒否する場合、配列から「0」を削除)
$countPages = array(0, '1', '2', 'top', 'home');
// in_array()関数の第3引数にtrueを設定し型もチェック
if (!in_array($pageID, $countPages, TRUE)) {
    echo 'カウントできません。';
    return;
}

// パスを含むカウンタ値を記録するファイルを設定します。
$countPath = __DIR__ . '/../data/output';
if (!is_dir($countPath)) {
    die('ディレクトリが存在しません。');
}
$countFile = realpath($countPath) . '/' . $pageID . '.dat';

// ファイルを開きます(追記/読み取りモード)。
$fp = fopen($countFile, 'a+b');
if (!is_resource($fp)){
    die('ファイルを開けませんでした。');
}

// ファイルをロックします。
flock($fp, LOCK_EX);

// カウンタ値を取得し、1加算します。
$count = (int)fgets($fp);

if(is_int($count)){
$count = $count + 1;
}

// ファイルの中身をクリアします。
ftruncate($fp, 0);

// カウンタ値をファイルに書き込みます。
fwrite($fp, $count);

// ファイルのロックを解除します。
fflush($fp);
flock($fp, LOCK_UN);

// ファイルを閉じます。
fclose($fp);

// カウンタ値を出力します。
echo "アクセス数: $count (PAGE ID:$pageID)";
