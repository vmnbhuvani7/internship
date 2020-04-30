<?php

include 'DBConnection.php';
$dbcon = new DBConnection();
$dbcon->DBConnectionData();

$product_list_id=$_POST['product_list_id'];
$product_name=$_POST['product_name'];
$product_type=$_POST['product_type'];
$rate=$_POST['rate'];
$product_version=$_POST['product_version'];
$product_version_detail=$_POST['product_version_detail'];
$product_warrenty_month=$_POST['product_warrenty_month'];

$array=$dbcon->productEdit($product_list_id,$product_name,$product_type,$rate,$product_version,$product_version_detail,$product_warrenty_month);
?>
