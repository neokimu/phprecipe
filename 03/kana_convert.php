<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        function kana_convert($kana, $convert) {
            
            switch (is_string($kana)) {
                case ($convert == 'k'):
                    
                    echo mb_convert_kana($kana, $convert);
                    break;
                
                case ($convert == 'K'):
                    
                    echo mb_convert_kana($kana, $convert);
                    break;
                
                case ($convert == 'h'):
                    
                    echo mb_convert_kana($kana, $convert);
                    break;
                
                case ($convert == 'H'):
                    
                    echo mb_convert_kana($kana, $convert);
                    break;
                
                case ($convert == 'c'):
                    
                    echo mb_convert_kana($kana, $convert);
                    break;
                
                case ($convert == 'C'):       
                    
                    echo mb_convert_kana($kana, $convert);
                    break;
                
                case ($convert == 'V'):    
                    
                    echo mb_convert_kana($kana, $convert);
                    break;
                
                case ($convert == 's'):
                    
                    echo mb_convert_kana($kana, $convert);
                    break;
                
                case ($convert == 'S'):
                    
                    echo mb_convert_kana($kana, $convert);
                    break;
                
                default:
                    trigger_error('E_USER_NOTICE');
                    break;
            }
        }
            
        $text1 = 'ピッコロ';
               
        $text2 = 'ﾀﾝﾊﾞﾘﾝ';

        $text3 = 'ぴあの';

        $text4 = 'ｼﾝﾊﾞﾙ';

        $text5 = 'ドラム';

        $text6 = 'はーみにか';
        
        kana_convert($text1, 'k');
        
        ?>
    </body>
</html>
