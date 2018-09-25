<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <meta http-equiv="Content-Script-Type" content="text/javascript" />
        <title>アンケートフォーム</title>
        <link rel="stylesheet" type="text/css" href="../css/intro.css" media="screen,tv" />
    </head>
    <body>    
    <div id="box">
    <div id="header">
        <h1>PHP for Web Designer</h1>   
    </div>
        <ul id="menu" class="clearfix">
            <li class="active"><a href="question1.php">アンケート</a></li>
            <li><a href="form1.php">メールフォーム</a></li>
            <li><a href="wasapi/">グルメMAP</a></li>
        </ul>
        <div id="main">
        <h2>アンケートフォーム</h2>
        <?php
        $textfile = '../intro_log/log.txt';
        
        if(! file_exists($textfile)){
            die('ファイルが見つかりません。');
        }
        
        $fp = fopen($textfile, 'rb');
        
        if(!$fp) {
            die('ファイルがないか異常かあります');
        }
        
        if (!flock($fp, LOCK_EX)) {  
            exit('ファイルをロックできませんでした');
        }
        
        while (!feof($fp)) {  
            $buffer[] = trim(fgets($fp)); 
        }    
        ?>
        <p>アンケートの集計の結果：総数<?=$buffer[12]?>件</p>
        <table class="question">
            <thead>
            <tr>
                <th>質問</th>
                <th>人数</th>
                <th>比較</th>
            </tr>
            </thead>
            <tr>
                <td>性別</td>
                <?php
                echo '<td>男性：' . $buffer[0] . '人 女性：' . $buffer[1] . '人</td>';
                echo '<td>男性：' . round($buffer[0]/$buffer[12] * 100) . 
                     '% 女性：' . round($buffer[1]/$buffer[12] * 100) . '%</td>';
                ?>
            </tr>
            <tbody>
                <tr>
                    <td>年齢</td>
                    <td>
                        <?php
                        echo '10代：' . $buffer[2] . '人<br />'.
                             '20代：' . $buffer[3] . '人<br />'.
                             '30代：' . $buffer[4] . '人<br />'.
                             '40代：' . $buffer[5] . '人<br />'.
                             '50代以上：' . $buffer[6] . '人';
                        ?>
                    </td>
                    <td>
                        <?php
                        echo '10代：' . round($buffer[2]/$buffer[12] * 100) . '%<br />'.
                             '20代：' . round($buffer[3]/$buffer[12] * 100) . '%<br />'.
                             '30代：' . round($buffer[4]/$buffer[12] * 100) . '%<br />'.
                             '40代：' . round($buffer[5]/$buffer[12] * 100) . '%<br />'.
                             '50代以上：' . round($buffer[6]/$buffer[12] * 100) . '%';
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>趣味</td>
                    <td>
                        <?php
                        echo '音楽鑑賞：' . $buffer[7] . '人<br />'.
                             '映画鑑賞：' . $buffer[8] . '人<br />'.
                             'ドライブ：' . $buffer[9] . '人<br />'.
                             '旅行：' . $buffer[10] . '人<br />'.
                             'その他：' . $buffer[11] . '人';
                        ?>
                    </td>
                    <td>
                        <?php
                        echo '音楽鑑賞：' . round($buffer[7]/$buffer[12] * 100) . '%<br />'.
                             '映画鑑賞：' . round($buffer[8]/$buffer[12] * 100) . '%<br />'.
                             'ドライブ：' . round($buffer[9]/$buffer[12] * 100) . '%<br />'.
                             '旅行：' . round($buffer[10]/$buffer[12] * 100) . '%<br />'.
                             'その他：' . round($buffer[11]/$buffer[12] * 100) . '%';
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <p>
            <a href="question1.php"><input type="button" value="戻る"/></a>    
        </p>
        </div>
            <p class="copy">
            &copy; 2010 PHP for Web Designer. All rights reserved.
            </p>
        </div>
    </body>
</html>
