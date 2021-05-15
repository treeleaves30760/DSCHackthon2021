<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <title>領餐時間</title>
    <style>
        .container {
            padding-top: 120px;
            padding-bottom: 120px;
            padding-left: 120px;
            padding-right: 120px;
        }
    </style>
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center flex-column">
        <h2><b>預約成功</b></h2>
        <br>
        <button class="btn btn-success">
            <h2>領取時間<h2 class="timeToGet">
                    <?php
                $json_data = file_get_contents('../js/getarr.json');
                $data = json_decode($json_data, true);
                $myjson = fopen("../js/getarr.json", "w");
                $timezone  = +7; // UTC +x
                $nowTime = time();
                $lastTime = $data['time'];
                if ($nowTime > $lastTime + 60) {
                    echo(gmdate('Y-m-d h:i:s', $nowTime + 60 + 3600*($timezone+date("I"))));
                    $data['time'] = $nowTime += 60;
                } else {
                    echo(gmdate('Y-m-d h:i:s', $lastTime + 60 + 3600*($timezone+date("I"))));
                    $data['time'] += 60;
                }
                fwrite($myjson, json_encode ( $data ));
                fclose($myjson);
            ?>
                </h2>
            </h2>
        </button>
        <br>
        <button class="btn btn-warning btn-lg" onclick="location.href='../index.php'">
            <b>回到主頁</b>
        </button>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>