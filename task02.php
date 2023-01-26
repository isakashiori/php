<?php

$last_name = $argv[1];
$first_name = $argv[2];
$num = $argv[3];

echo 'こんにちわ、'.$last_name.'さん。'."\n";
echo $first_name.'っていい名前ですね。'."\n";
echo $num.'回いいます。';
for($i = 0; $i < $num; $i++){
  echo $first_name.'。';
  if ($i == $num)
    echo $first_name.'。'."\n";
}

?>
