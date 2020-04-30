
<?php
	include 'DBConnection.php';
	$dbcon= new DBConnection();
	$dbcon->DBConnectionData();
		
		$seller_name=$_POST['seller_name'];
		$seller_comp_name=$_POST['seller_comp_name'];
		$seller_mobile_no=$_POST['seller_mobile_no'];
		$seller_address=$_POST['seller_address'];
		$seller_join_date=$_POST['seller_join_date'];
		$seller_remark=$_POST['seller_remark'];
		
		$array=$dbcon->sellerAdd($seller_name,$seller_comp_name,$seller_mobile_no,$seller_address,$seller_join_date,$seller_remark);

?>