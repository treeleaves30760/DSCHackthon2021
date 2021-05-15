<?php
  if ($_POST['name'] == "") {
    echo "<script>alert('警告：請輸入領餐者姓名');</script>";
    header('Location: ../admin.php');
    exit;
  } else if ($_POST['meal'] == "") {
    echo "<script>alert('警告：請輸入餐點名稱');</script>";
    header('Location: ../admin.php');
    exit;
  }
  
  
  $json_data = file_get_contents('../js/text.json');
  $data = json_decode($json_data, true);

  $myjson = fopen("../js/text.json", "w");
  $time = time();
  $arr = [
    "orderId"=>count($data),
    "name"=>$_POST['name'],
    "meal"=>$_POST['meal'],
    "arriveTime"=>$time,
    "isGet"=>0
  ];
  array_push($data,$arr);
  fwrite($myjson, json_encode ( $data ));
  fclose($myjson);
  header('Location: ../admin.php');
  exit;

?>
