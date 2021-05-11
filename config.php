<?php
$mysql_server_name = $_ENV["SERVER"];
$mysql_user_name = $_ENV["USER_NAME"];
$mysql_password = $_ENV["PASSWORD"];
$mysql_db_name = $_ENV["DB_NAME"];

$connection = new mysqli($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_db_name);


if($connection->connect_error) {
      echo "Connection_Error ..........".$connection->connect_error;
} else {
      echo "<h1> Database Connection Success </h1>";
}
?>
