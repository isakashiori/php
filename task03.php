<?php
$today = date("YmdHis");
$filename = $today.'.txt';


$last_name = $argv[1];
$first_name = $argv[2];
$num = $argv[3];

file_put_contents($filename, ($data = 'こんにちわ、'.$last_name.'さん。'."\n"), FILE_APPEND);
file_put_contents($filename, ($data = $first_name.'っていい名前ですね。'."\n"), FILE_APPEND);
file_put_contents($filename, ($data = $num.'回いいます。'), FILE_APPEND);
for($i = 0; $i < $num; $i++){
  file_put_contents($filename, ($data = $first_name.'。'), FILE_APPEND);
  if ($i == $num)
  file_put_contents($filename, ($data = $first_name.'。'."\n"), FILE_APPEND);
}

echo file_get_contents('20230126093843.txt')

?>
