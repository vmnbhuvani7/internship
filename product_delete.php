<?php 

include 'DBConnection.php';
$dbcon= new DBConnection();
$dbcon->DBConnectionData();

$id = $_GET['id'];
$array = $dbcon->productDelete($id);

?>