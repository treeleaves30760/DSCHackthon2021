<?php
  $json_data = file_get_contents('./js/text.json');
  $data = json_decode($json_string, true);

  $myjson = fopen("./js/text.json", "w");
  $time = time();
  $arr = [
    "orderId"=>count($data),
    "name"=>$_POST['name'],
    "meal"=>$_POST['meal'],
    "arriveTime"=>$time,
    "isGet"=>0
  ]
  array_push($data,$arr);
  fwrite($myjson, json_encode ( $data ));
  fclose($myjson);
  header('Location: ./index.php');
  exit;

?>
