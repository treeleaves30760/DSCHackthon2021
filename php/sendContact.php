<?php
    if ($_POST['email'] == "") {
        echo "<script>alert('請輸入Email');</script>";
        echo "<a href='../index.php'>回到上一頁</a>";
        // header('Location: ../admin.php');
        exit;
      } else if ($_POST['message'] == "") {
        echo "<script>alert('請輸入欲傳送之訊息');</script>";
        echo "<a href='../admin.php'>回到上一頁</a>";
        header('Location: ../index.php');
        exit;
      }

    $json_data = file_get_contents('../js/contactMessage.json');
    $data = json_decode($json_data, true);

    $myjson = fopen("../js/contactMessage.json", "w");
    $time = time();
    $arr = [
        "messageId"=>count($data),
        "email"=>$_POST['email'],
        "message"=>$_POST['message'],
        "sendTime"=>$time,
    ];

    array_push($data,$arr);
    fwrite($myjson, json_encode ( $data ));
    fclose($myjson);
    header('Location: ../index.php');
    exit;
?>