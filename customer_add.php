
<?php
	include 'DBConnection.php';
	$dbcon= new DBConnection();
	$dbcon->DBConnectionData();
	
		$comp_name=$_POST['comp_name'];
		$cust_name=$_POST['cust_name'];
		$address=$_POST['address'];
		$mobile_no=$_POST['mobile_no'];
		$bussiness_type=$_POST['bussiness_type'];
		$whatsapp_no=$_POST['whatsapp_no'];
		$ref_cust_info_id=$_POST['ref_cust_info_id'];
		$ref_amount=$_POST['ref_amount'];
		$ref_paid_status=$_POST['ref_paid_status'];
		$remark=$_POST['remark'];
		$d_status=$_POST['d_status'];
		$d_date=$_POST['d_date'];
		
		$array=$dbcon->customerAdd($comp_name,$cust_name,$address,$mobile_no,$bussiness_type,$whatsapp_no,$ref_cust_info_id,$ref_amount,$ref_paid_status,$remark,$d_status,$d_date);
		
?>