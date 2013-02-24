<?php
include('../include/PDOConnect.php');
$table = 'Items';
$success = $connection->query("CREATE TABLE IF NOT EXISTS $table (ID INT AUTO_INCREMENT PRIMARY KEY, ArticleNumber VARCHAR(32), Description TEXT, TaxCategory INT, MinimumAmount INT)");

if ($success) {
  echo 'Table "' . $table . '" created';
}
?>
