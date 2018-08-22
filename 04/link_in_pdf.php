<?php
// TCPDFをインクルードします(パスを適切に設定してください)。
require_once '../lib/tcpdf/tcpdf.php';

// TCPDFオブジェクトをnew演算子で作成します。
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT);

// 文書のプロパティを設定します。
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('作成者');
$pdf->SetTitle('タイトル');
$pdf->SetSubject('サブタイトル');
$pdf->SetKeywords('キーワード, PHP逆引きレシピ');

// ベッター/フッターを削除します。
$pdf->setPrintHeader(FALSE);
$pdf->setPrintFooter(FALSE);

// マージンを設定します。
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
// 自動改ページを有効にします。
$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);

// 文字フォントをTCPDFに同梱の「kozagopromedium」、14ポイントに設定します。
$pdf->SetFont('kozgopromedium', '', 14);
// 文字の背景を白に設定します。
$pdf->SetFillColor(255, 255, 255, TRUE);

// ページを追加します。
$pdf->AddPage();

// Write()メソッドで書き込みます。
// 引数（1:行高, 2:文字列, 3:リンク, 4:背景, 5:行揃え, 6:改行）
$pdf->Write(7, "writeHTML()メソッド\n外部リンクを設定します", '', 0, '', true);
$pdf->Write(7, 'PHPの学習は「');
// Write()メソッドの第3引数でリンクを設定
$pdf->Write(7, 'PHP逆引きレシピ', 'http://php-recipe.com/');
$pdf->Write(7, '」を使います。', '', 0, '', TRUE);

// 改行
$pdf->Ln();

// リンクをHTMLで記述します。
$html = 'writeHTML()メソッド<br>外部リンクを設定します。<br>'
  . 'PHPの学習は「<a href="http://php-recipe.com/">PHP逆引きレシピ</a>」'
  . 'を使います。';
$pdf->writeHTML($html);
// この関数は PHP 7.2.0 で 非推奨になります。この関数に頼らないことを強く推奨します。


// Internet ExplorerがContent-Typeヘッダーを無視しないようにします☆レシピ287☆（XSS対策をしたい）。
header('X-Content-Type-Options: nosniff');
// PDFを動的に出力します。
$pdf->Output();