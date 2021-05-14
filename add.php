<?php
  $json_string = file_get_contents('./js/text.json'); 
  $data = json_decode($json_string, true);
  // print_r(gettype($data[0]["message"]));

  $myjson = fopen("./js/text.json", "w");
  $time = time();
  $arr = [
    "message"=>$_POST['messageToSend'],
    "time"=>$time
  ];
  array_push($data,$arr);
  fwrite($myjson, json_encode ( $data ));
  fclose($myjson);
  header('Location: https://chat.hsupohsiang.repl.co/');
  exit;
?>