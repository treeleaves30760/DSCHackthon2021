<?php
  if ($_POST['name'] == "") {
    echo "<script>alert('警告：請輸入領餐者姓名');</script>";
    echo "<a href='../admin.php'>回到上一頁</a>";
    // header('Location: ../admin.php');
    exit;
  } else if ($_POST['meal'] == "") {
    echo "<script>alert('警告：請輸入餐點名稱');</script>";
    echo "<a href='../admin.php'>回到上一頁</a>";
    header('Location: ../admin.php');
    exit;
  }
  
  
  $json_data = file_get_contents('../js/tex.json');
  $data = json_decode($json_data, true);

  $myjson = fopen("../js/tex.json", "w");
  $time = time();
  $arr = [
    "orderId"=>count($data),
    "name"=>$_POST['name'],
    "meal"=>$_POST['meal'],
    "arriveTime"=>$time,
    "isGet"=>0
  ];
  array_push($data['data'],$arr);
  fwrite($myjson, json_encode ( $data ));
  fclose($myjson);
  header('Location: ../admin.php');
  exit;

?>
