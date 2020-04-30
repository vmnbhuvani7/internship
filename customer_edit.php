<?php
  include 'DBConnection.php';
  $dbcon= new DBConnection();
  $dbcon->DBConnectionData();
   $id = $_GET['id']; 
    $query = "SELECT * FROM cust_info WHERE cust_info_id = '$id'"; 
    $result = mysqli_query($dbcon->conn,$query);
    $array = mysqli_fetch_array($result);
?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>project1</title>
    <!-- <script src="customer_add_list.js"></script> onsubmit="return validateForm()" -->
  </head>
  <body>
    <?php include_once('index.php'); ?>
      <div class="container">
        <form id="customerAdd" action="customer_add_edit.php"  method="post">
          <div class="row">
            <div class="col-2">
              <label class="label-control">cust_info_id:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="cust_info_id" id="cust_info_id" readonly="readonly" value="<?php echo $array['cust_info_id']; ?>">
            </div>
          </div>

          <div class="row">
            <div class="col-2">
              <label class="label-control">Company Name:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="comp_name" id="comp_name" value="<?php echo $array['comp_name']; ?>"  required data-validation-required-message="enter aaaa">
            </div>
          </div>
            <div class="row">
            <div class="col-2">
              <label class="label-control">cust_name:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="cust_name" id="cust_name" required 
               data-validation-required-message="You must agree to the terms and conditions" value="<?php echo $array['cust_name']; ?>" >
              </div>
          </div>
          <div class="row">
            <div class="col-2">
              <label class="label-control">address:</label>
            </div>
           <div class="col-10">
              <textarea name="address" id="address" rows="2" style=" width: 920px;"><?php echo $array['address']; ?></textarea>
            </div>
          </div><div class="row">
            <div class="col-2">
              <label class="label-control">mobile_no</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="mobile_no" id="mobile_no" value="<?php echo $array['mobile_no']; ?>">
            </div>
          </div><div class="row">
            <div class="col-2">
              <label class="label-control">bussiness_type</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="bussiness_type" id="bussiness_type" value="<?php echo $array['bussiness_type']; ?>">
            </div>
          </div><div class="row">
            <div class="col-2">
              <label class="label-control">whatsapp_no</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="whatsapp_no" id="whatsapp_no" value="<?php echo $array['whatsapp_no']; ?>">
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <label class="label-control">ref_cust_info_id</label>
            </div>
           <div class="col-10">
              
              <?php 
                  $result1=$dbcon->customerList();
                  if(mysqli_num_rows($result1)>0){
                ?>
                <select id="ref_cust_info_id" name="ref_cust_info_id" class="form-control">
                    <option value="NULL"> </option>
                    <?php 
                       while($array1 = mysqli_fetch_array($result1)){ 
                     ?>
                    <option value="<?php echo $array1['cust_info_id']; ?>"
                    <?php if($array['ref_cust_info_id']==$array1['cust_info_id']) { ?> selected="selected"
                    <?php } ?> ><?php echo $array1['cust_name']."||". $array1['comp_name']; ?>
                    </option>
                  <?php } } ?>
                </select>

            </div>
          </div><div class="row">
            <div class="col-2">
              <label class="label-control">ref_amount:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="number" name="ref_amount" id="ref_amount" value="<?php echo $array['ref_amount']; ?>">
            </div>
          </div><div class="row">
            <div class="col-2">
              <label class="label-control">ref_paid_status</label>
            </div>
           <div class="col-10">
             <select id="ref_paid_status" name="ref_paid_status" class="form-control" >
                <?php if($array['ref_paid_status']== 'Unpaid'){ ?>
                  <option value="Unpaid">Unpaid</option>
                  <option value="Paid">Paid</option>
                <?php } else { ?>
                  <option value="Paid">Paid</option>
                  <option value="Unpaid">Unpaid</option>
                <?php } ?>
              </select>
            </div>
          </div><div class="row">
            <div class="col-2">
              <label class="label-control">remark:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="remark" id="remark"value="<?php echo $array['remark']; ?>" >
            </div>
          </div><div class="row">
            <div class="col-2">
              <label class="label-control">d_status:</label>
            </div>
           <div class="col-10">
               <select id="d_status" name="d_status" class="form-control" >
                <?php if($array['d_status']=="Yes"){ ?>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                <?php } else { ?>
                  <option value="No">No</option>
                  <option value="Yes">Yes</option>
                <?php } ?>
              </select>
            </div>
          </div><div class="row">
            <div class="col-2">
              <label class="label-control">d_date:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="date" name="d_date" id="d_date" value="<?php echo $array['d_date']; ?>">
            </div>
          </div>
          <div class="row">
            <div class="col-2">
            </div>
            <div class="col-10">
              <input  type="submit" name="SAVE" value="SAVE" id="SAVE" class="btn btn-success">
              <input  type="reset" name="SAVE" value="RESET"  id="SAVE" class="btn btn-success">
            </div>
          </div>
        </form>
      </div>
   <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>