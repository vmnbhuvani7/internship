<?php
 class DBConnection{
 	public $conn;
 	
 	function DBConnectionData()
 	{
 		
 		$this->conn=mysqli_connect("localhost","root","","spider");

 	}

 	
 	function customerAdd($comp_name,$cust_name,$address,$mobile_no,$bussiness_type,$whatsapp_no,$ref_cust_info_id,$ref_amount,$ref_paid_status,$remark,$d_status,$d_date)
 	{
 		$qry="INSERT INTO `cust_info`(`comp_name`, `cust_name`, `address`, `mobile_no`, `bussiness_type`, `whatsapp_no`, `ref_cust_info_id`, `ref_amount`, `ref_paid_status`, `remark`, `d_status`, `d_date`) VALUES ('$comp_name','$cust_name','$address','$mobile_no','$bussiness_type','$whatsapp_no','$ref_cust_info_id','$ref_amount','$ref_paid_status','$remark','$d_status','$d_date')";
		
		
		$array=mysqli_query($this->conn,$qry);
		header('Location:customer_list.php');

 	}

 	function sellerAdd($seller_name,$seller_comp_name,$seller_mobile_no,$seller_address,$seller_join_date,$seller_remark)
 	{
 		$qry="INSERT INTO `seller_info`(`seller_name`, `seller_comp_name`, `seller_mobile_no`, `seller_address`, `seller_join_date`, `seller_remark`) VALUES ('$seller_name','$seller_comp_name','$seller_mobile_no','$seller_address','$seller_join_date','$seller_remark')";

		mysqli_query($this->conn,$qry);

		header('Location:seller_list.php');

 	}

 	function customerEdit($cust_info_id,$comp_name,$cust_name,$address,$mobile_no,$bussiness_type,$whatsapp_no,$ref_cust_info_id,$ref_amount,$ref_paid_status,$remark,$d_status,$d_date)
 	{
 		$qry = "UPDATE `cust_info` SET `cust_info_id`='$cust_info_id',`comp_name`='$comp_name',`cust_name`='$cust_name' ,`address`='$address',`mobile_no`='$mobile_no',`bussiness_type`='$bussiness_type',`whatsapp_no`='$whatsapp_no',`ref_cust_info_id`='$ref_cust_info_id',`ref_amount`='$ref_amount',`ref_paid_status`='$ref_paid_status',`remark`='$remark',`d_status`='$d_status' ,`d_date`='$d_date' WHERE cust_info_id = '$cust_info_id'";
   		 $array = mysqli_query($this->conn,$qry);
		header('Location:customer_list.php');
 	}

 	function sellerEdit($seller_info_id,$seller_name,$seller_comp_name,$seller_mobile_no,$seller_address,$seller_join_date,$seller_remark)
 	{
 		$qry = "UPDATE `seller_info` SET `seller_info_id`='$seller_info_id',`seller_name`='$seller_name',`seller_comp_name`='$seller_comp_name' ,`seller_mobile_no`='$seller_mobile_no',`seller_address`='$seller_address',`seller_join_date`='$seller_join_date',`seller_remark`='$seller_remark' WHERE seller_info_id = '$seller_info_id'";
   		mysqli_query($this->conn,$qry);
		header('Location:seller_list.php');
 	}


	function productEdit($product_list_id,$product_name,$product_type,$rate,$product_version,$product_version_detail,$product_warrenty_month)
	{
		$qry="UPDATE `product_list` SET `product_list_id`='$product_list_id',`product_name`='$product_name',`product_type`='$product_type' ,`rate`='$rate',`product_version`='$product_version',`product_version_detail`='$product_version_detail',`product_warrenty_month`='$product_warrenty_month' WHERE product_list_id = '$product_list_id'";
		mysqli_query($this->conn,$qry);
		header('Location:product_list.php');
	}
 	function customerDelete($id)
 	{
 	$qry = "delete FROM cust_info WHERE cust_info_id = '$id'"; 
    $array = mysqli_query($this->conn,$qry);
    header('Location:customer_list.php');
 	}

 	function sellerDelete($id)
	{
		$qry = "delete from seller_info where seller_info_id='$id'";
		$result=mysqli_query($this->conn,$qry);
		header('Location:seller_list.php');
	}

	function productDelete($id)
	{
		$qry = "delete from product_list where product_list_id='$id'";
		$result=mysqli_query($this->conn,$qry);
		header('Location:product_list.php');	
	}

 	function customerList()
 	{
 		$qry = "select * from cust_info";
 		$result1 = mysqli_query($this->conn,$qry);
 		return $result1;
 	}

 	function customerAddList()
 	{
 		$query = "SELECT * FROM cust_info"; 
   		 $result = mysqli_query($this->conn,$query);
    	$array = mysqli_fetch_array($result);
   		 return $array;
 	}

 	function productSellInformation($id)
 	{
 		$qry = "select c.product_name,c.product_type,c.rate,c.product_version,c.product_version_detail,c.product_warrenty_month,c.product_invoice_no,c.training,c.cod,c.sell_date,c.u_serial,c.u_serial_enc from product_list_sell where cust_info_id='id'";
 		$result = mysqli_query($this->conn,$qry);
 		return $result;
 	}

 }

?>