<?php
  // This is to confirm the order
  $json_data = file_get_contents('../js/tex.json');
  $data = json_decode($json_data, true);

  $myjson = fopen("../js/tex.json", "w");

  $arrLength = 1;
  $arrLength = count($data);

  $id = $_POST['orderId'];
  for($i = 0; $i < $arrLength; $i++) {
    if ($data['data'][$i]['orderId'] == $id) {
      $data['data'][$i]['isGet'] = 1;
      break;
    }
  }
  fwrite($myjson, json_encode ( $data ));
  fclose($myjson);
  header('Location: ../admin.php');
  exit;
?>