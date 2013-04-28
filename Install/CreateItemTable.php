<?php
include('../include/PDOConnect.php');
$table = 'Items';
$query = "CREATE TABLE IF NOT EXISTS $table (";
$query += "ID INT AUTO_INCREMENT PRIMARY KEY,";
$query += "Description TEXT,";
$query += "TaxCategory INT,";
$query += "MinimumAmount INT,";
$query += "ArticleNumber VARCHAR(32))";
$success = $connection->query($query);

if ($success) {
  echo 'Table "' . $table . '" created';
}
?>
