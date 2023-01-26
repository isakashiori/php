<?php

$query_type = $argv[1];
$name = $argv[2];
$column_value = preg_split("/=/", $name);
$column_value[0]; 
$column_value[1];


try{
	// 接続
	$db = new PDO('mysql:host=localhost;dbname=users', 'root', 'Mopchan0701!');
  
  switch ($query_type) {
    case 'insert':
      $sql = "INSERT INTO users (id,name) VALUES (NULL, '".$column_value[1]."')";
      break;
    
    case 'select':
      $sql = "SELECT * FROM users WHERE name = '".$column_value[1]."'";
      break;

    case 'update':
      $new_name = $argv[3];
      $new_column_value = preg_split("/=/", $new_name);
      $new_column_value[1];
      $sql = "UPDATE users SET name = '" . $new_column_value[1] . "' WHERE name = '".$column_value[1]."'";
      break;

    case 'delete':
      $sql = "DELETE FROM users WHERE name = '".$column_value[1]."'";
      break;
  }

	$result = $db->exec($sql);


  

	// if (!$result) {
	//     echo 'INSERTが失敗しました。'.mysqli_error();
	// }else{
	// 	echo 'INSERTが成功しました';
	// }

	// クローズ
	$db = null;
} catch(PDOException $e){
    echo "データベース接続失敗" . PHP_EOL;
	echo $e->getMessage();
	exit;
}


?>