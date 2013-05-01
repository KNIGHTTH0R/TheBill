<?php
include('../include/PDOConnect.php');
$table = "customers";

$query = "CREATE TABLE IF NOT EXIST $table (ID INT AUTO_INCREMENT PRIMARY_KEY, ";
$query += "gender INT, "
$query += "customer_category INT, ";              // New customer, Returning, Reseller, etc.
$query += "first_name TEXT, ";
$query += "last_name TEXT, ";                     // I want to put this into a separate table later to save space
$query += "billing_adress_ID INT, ";
$query += "shipping_adress_ID INT, ";

$success = $connection->query($query);

if ($success) {
  echo 'Table "' . $table . '" created';
}
?>
