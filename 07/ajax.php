<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>JSON形式のデータを返すWeb APIを作りたい</title>
        <link href="../css/style.css" rel="stylesheet">
        <script src="../js/jquery-2.0.3.min.js"></script>
        <script>
            $(function(){
               $("#load").on("click", function(){
                   $.getJSON("json.php", function(data){
                       for(var i in data) {
                           var tr = $("<tr>");
                           var td_item = $("<td>").text(data[i].item);
                           tr.append(td_item);
                           var td_price = $("<td>").text(data[i].price);
                           tr.append(td_price);
                           var td_orders = $("<td>").text(data[i].oders);
                           tr.append(td_oders);
                           $("#listbox").append(tr);
                           $("#load").hide();
                       }
                   });
               }); 
            });
        </script>
    </head>
    <body>
        <div>
        <input type="button" value="読込" id="load">
        <table id="listbox">
            <tr>
                <th>品名</th>
                <th>価格</th>
                <th>注文数</th>
            </tr>
        </table>
        </div>
    </body>
</html>
