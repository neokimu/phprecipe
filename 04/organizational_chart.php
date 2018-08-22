<?php
// 別ファイルのユーザー定義関数「makeChartParts()」を読み込みます。
require_once 'make_chart_parts.php';

// グラフの値
$data = array();
  $data[] = array('表示データ', '新要素', 'マウスオーバー');
  $data[] = array('名古屋本店', '', 'Nagoya Head Office');
  $data[] = array('経営部', '名古屋本店', 'Sales Dep.');
  $data[] = array('総務部', '名古屋本店', 'General Affairs Dep.');
  $data[] = array('営業1課', '経営部', '');
  $data[] = array(array('v' => 'S2', 'f' => '営業2課<br>豊田店'), '経営部', '');
  $data[] = array('1係', 'S2', '');
  $data[] = array('2係', 'S2', '');
  $data[] = array('総務課', '総務部', '');
  $data[] = array('特命係', '総務課', '');
  $data[] = array('特命係長<br><a href="#">只野仁</a>', '特命係', '');
  $data[] = array('杉下右京', '特命係', '');
  
  
// グラフのオプション
$options = array('allowHtml' => true); // グラフ内のHTMLタグ有効化

// グラフ種類（組織図）
$type = 'OrgChart';

// グラフ描画のJavaScriptの関数、表示させる<div>タグの生成
list($chart, $div) = makeChartParts($data, $options, $type);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>組織図グラフを生成したい</title>
<script src="https://www.google.com/jsapi"></script>
<script>
<?php
// グラフ描画関数を表示します。
echo $chart
?>
</script>
</head>
<body>
<div>
<?php
// グラフを表示させる<div>タグを適切な場所に配置します。
echo $div
?>
</div>
</body>
</html>
