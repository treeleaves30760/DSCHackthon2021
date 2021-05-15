<?php
  // This is to confirm the order
  $json_data = file_get_contents('./js/text.json');
  $data = json_decode($json_string, true);

  $myjson = fopen("./js/text.json", "w");
  $arrlength = count($data);
  $id = $_POST;
  for($i = 0; $i < $arrlength; $i++) {
    if (data[i]['orderId'] == id) {
      data[i]['isGet'] = 1;
      break;
    }
  }
  exit;
?>