<?php
require_once '../lib/h.php';

$keyword = isset($_GET['q'])?$_GET['q'] : '';

if ($keyword) {
    $qs = array(
        'action' => 'query',
        'list' => 'search',
        'format' => 'json',
        'srsearch' => $keyword,
    );
    $url = 'https://ja.wikipedia.org/w/api.php?' . http_build_query($qs);
    $json = file_get_contents($url);
    if ($json === FALSE) {
        die('システムエラーです。');
    }
    
    $wikipedia = json_decode($json);
    
    if (json_last_error() != JSON_ERROR_NONE) {
        die('システムエラーです。');
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>JSON形式のデータを利用する</title>
    </head>
    <body>
        <form method="get" action="wikipedia.php">
            Wikipedia検索: 
            <input type="search" name="q" value="<?=h($keyword);?>">
            <input type="submit" value="検索">
        </form>
        <?php
        if (isset($wikipedia)) {
            echo h($wikipedia->query->searchinfo->totalhits), '件<br>' . "\n";
            foreach ($wikipedia->query->search as $item) {
                $url   = 'https://ja.wikipedia.org/wiki/' . rawurlencode($item->title);
                $title = $item->title;
                $ts    = $item->timestamp;
                printf('%s <a href="%s">%s</a><br>' . "\n", h($ts), h($url), h($title));               
            }
        }
        ?>
    </body>
</html>
