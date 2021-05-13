<?php

$json = file_get_contents('/var/www/html/credentials.json');

$json_data = json_decode($json,true);

$secrets = json_decode($json_data["SecretString"], true);

$mysql_server_name = $secrets["SERVER"];
$mysql_user_name = $secrets["USER_NAME"];
$mysql_password = $secrets["PASSWORD"];
$mysql_db_name = $secrets["DB_NAME"];

$connection = new mysqli($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_db_name);


if($connection->connect_error) {
      echo "Connection_Error ..........".$connection->connect_error;
} else {
      echo "<h1> Database Connection Success </h1>";
}
?>
