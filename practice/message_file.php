<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>メッセージ</title>
    </head>
    <body>
        <!--入力のフォーム-->
        <h1>フォームデータの送信</h1>
        <form action = 'message_file.php' method = 'get'>
        <input type = 'text' name ='message'><br>
        <input type = 'submit' value = '送信'><br><br>
        <?php
        // メッセージの入力確認
        if(isset($_GET['message'])){
        // メッセージが入力されて、メッセージの中身をファイルに保存します。
            $message = $_GET['message'];
            echo $message;
            file_save($message);
        }
        
        function file_save($message = '') {
        // メッセージの内容がある場合、ファイルにメッセージを保存します。    
            if(!$message==''){
                $dir = '../data';
                $path = realpath($dir). '/message.txt';
                $dateObj = new DateTime();
                $date = $dateObj->format('Y/m/d_H:i:s');
        
                //ディレクトリの有無を確認
                if(!is_dir($dir)){
                    die('ディレクトリが存在しません。');
                }
                
                $message .= "_{$date}\n";
                
                $fp = fopen($path, 'a+b');
                
                flock($fp, LOCK_EX);
                
                fwrite($fp, $message);
                
                fflush($fp);
                
                flock($fp, LOCK_UN);
                    
                fclose($fp);    
                
                echo 'メッセージが保存しました。';
                
            } else {
                echo 'メッセージを入力してください。';
            }
        }
        ?>
    </body>
</html>
