<?php
include('../include/PDOConnect.php');
$table = 'Items';
$query = "CREATE TABLE IF NOT EXISTS $table (";
$query += "ID INT AUTO_INCREMENT PRIMARY KEY,";
$query += "ArticleNumber VARCHAR(32),";
$query += "MinimumAmount INT,";                   // Minimum amount before ordering more 
$query += "TaxCategory INT,";                     // for countries (like germany) with multiple VAT rates for different goods
$query += "Description TEXT)";
$success = $connection->query($query);

if ($success) {
  echo 'Table "' . $table . '" created';
}
?>
