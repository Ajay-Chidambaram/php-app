<?php

$json = file_get_contents('/var/www/html/credentials.json');

$json_data = json_decode($json,true);

$mysql_server_name = $json_data["SERVER"];
$mysql_user_name = $json_data["USER_NAME"];
$mysql_password = $json_data["PASSWORD"];
$mysql_db_name = $json_data["DB_NAME"];

$connection = new mysqli($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_db_name);


if($connection->connect_error) {
      echo "Connection_Error ..........".$connection->connect_error;
} else {
      echo "<h1> Database Connection Success </h1>";
}
?>
