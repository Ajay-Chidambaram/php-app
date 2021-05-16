<?php

$credential_json = file_get_contents('/var/www/html/credentials.json');
$server_json = file_get_contents('/var/www/html/server_name.json');

$credential_json_data = json_decode($credential_json, true);
$server_json_data = json_decode($sever_json, true);

$secrets = json_decode($credential_json_data["SecretString"], true);

$mysql_server_name = $server_json_data["SERVER"];
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
