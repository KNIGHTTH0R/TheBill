<?php
session_start();
if (!isset($_SESSION['IP'])) {  $_SESSION['IP'] = $_SERVER['REMOTE_ADDR']; $_SESSION['Logged_In'] = 0;}
?>
<!doctype html>
<html>
<head>
<title>Artikel Liste</title>
<link rel="stylesheet" href="include/body.css" type="text/css">
</head>
<body>
<h2>Artikelliste:</h2>
<table rules="all" border="1px" style="width: 100%; border-color: #FFFFFF">
  <tr>
    <th>Artikelnummer</th>
    <th>Beschreibung</th>
    <th>Letzte Änderung</th>
    <th>Lagerbestand</th>
  </tr>
<?php
include "include/PDOConnect.php";
$query = $connection->prepare("SELECT * FROM Items");
$query->execute();
for ($i = 0; $i < $query->rowCount(); $i++)
{
	$row = $query->fetch();
	echo "<tr><td>" . $row['ArticleNumber'] . "</td>";
	echo "<td>" . $row['description'] . "</td>";
	echo "<td>" . $row['LastChange'] ."</td>";
}
?>
</table><br>
<h2>Neuen Artikel erstellen:</h2><br>
<form id='CreateItem' action='/Project/CreateItem.php' method='post' accept-charset='UTF-8'>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<table rules="all" border="1px" style="width: 100%; border-color: #FFFFFF">
  <tr><td><label for='ArticleNumber'>Artikelnummer:</label></t:>
      <td><textarea Cols="100" rows="5" name='ArticleNumber' id='ArticleNumber'></textarea></td></tr>
  <tr><td><label for='ItemDescription'>Artikelbeschreibung:</label></t:>
      <td><textarea Cols="100" rows="25" name='ItemDescription' id='ItemDescription'></textarea></td></tr>
    <tr><td>&nbsp;</td><td><input type='submit' name='Submit' value='Submit' /></td>
  </tr>
</form>
</table>

</body>
</html>
