<?php
include('../include/PDOConnect.php');
$table = 'Items';
$success = $connection->query("CREATE TABLE IF NOT EXISTS $table (ID INT AUTO_INCREMENT PRIMARY KEY, status INT)");

if ($success) {
  echo 'Table "' . $table . '" created';
}
?>
