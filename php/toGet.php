<!DOCTYPE html>
<html>
    <head>

        <title>領餐時間</title>
    </head>
    <body>
        <div>
            <h1>預約成功</h1>
            <h1>領取時間:<h1 class = "timeToGet">
            
<?php
    $json_data = file_get_contents('../js/getarr.json');
    $data = json_decode($json_data, true);
    $myjson = fopen("../js/getarr.json", "w");
    $timezone  = +8;
    $nowTime = time();
    $lastTime = $data['time'];
    if ($nowTime > $lastTime + 60) {
        echo(gmdate('Y-m-d h:i:s', $nowTime + 3600*($timezone+date("I"))));

    } else {
        echo(gmdate('Y-m-d h:i:s', $lastTime + 3600*($timezone+date("I"))));
    }
    $data['time'] += 60;
    fwrite($myjson, json_encode ( $data ));
    fclose($myjson);
?>
        </h1></h1>
        <a href="../index.php">回到主頁</a>
    </div>
</body>
</html>