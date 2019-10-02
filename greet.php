<?php 

// echo htmlspecialchars("hi! " . $_GET["name"], ENT_QUOTES, "UTF-8"); // '.'を','にして無限に悩んでました。

//サーバ側から複数の値を返したい場合
$rs = array(
  "message" => htmlspecialchars("hi! " . $_GET["name"], ENT_QUOTES, "UTF-8"),
  "length" => strlen($_GET['name'])
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($rs);
