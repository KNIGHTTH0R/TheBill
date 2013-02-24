<?php
	$dsn = 'mysql:host=localhost;dbname=TheBill';
	$connection = new PDO($dsn, 'BillAdmin', 'BAdmin!');
	$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$connection->setAttribute(PDO::ATTR_PERSISTENT, true);
?>
