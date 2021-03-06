<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <meta http-equiv="Content-Script-Type" content="text/javascript" />
        <title>メールフォーム</title>
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
            <h2 class="mail-bar">メールフォーム</h2>
            <p class="app_msg">以下の内容でよろしければ送信ボタンを押してください。</p>
                <dl class="clearfix mailform">
                    <dt>お名前</dt>
                    <dd><?=$name?></dd>
                    <dt>e-mail</dt>
                    <dd><?=$email?></dd>
                    <dt>件名</dt>
                    <dd><?=$subject?></dd>
                    <dt>内容</dt>
                    <dd><?=nl2br($body)?></dd>
                </dl>
            <div>
                <form method="post" action="form1.php">
                    <p><input type="submit" value="入力画面に戻る" /></p>    
                </form>
                <form method="post" action="form3.php" class="spacer">
                    <input type="hidden" name="ticket" value="<?=$ticket?>">
                    <p><input type="submit" value="送信する" /></p>
                </form>
            </div>
        </div>
            <p class="copy">
            &copy; 2010 PHP for Web Designer. All rights reserved.
            </p>
        </div>
    </body>
</html>
