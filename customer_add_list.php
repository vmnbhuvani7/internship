<?php
  include 'DBConnection.php';
  $dbcon= new DBConnection();
  $dbcon->DBConnectionData();
    $array=$dbcon->customerAddList();
 ?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>project1</title>
    <script src="customer_add_list.js"></script>
  </head>
  <body>
    <?php include_once('index.php'); ?>
      <div class="container">
        <form id="customerAdd" action="customer_add.php" onsubmit="return validateForm()" method="post">  
          <div class="row">
            <div class="col-2">
              <label class="lable-control">Company Name:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="comp_name" id="comp_name" required>
            </div>
          </div>
            <div class="row">
            <div class="col-2">
              <label class="lable-control" class="lable-control">cust_name:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="cust_name" id="cust_name" required>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <label class="lable-control">address:</label>
            </div>
           <div class="col-10">
              <textarea name="address" id="address" rows="2" style=" width: 920px;"required></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <label class="lable-control">mobile_no</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="mobile_no" id="mobile_no"required >
            </div>
          </div><div class="row">
            <div class="col-2">
              <label class="lable-control">bussiness_type</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="bussiness_type" id="bussiness_type"required >
            </div>
          </div><div class="row">
            <div class="col-2">
              <label class="lable-control">whatsapp_no</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="whatsapp_no" id="whatsapp_no" required>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <label class="lable-control">ref_cust_info_id</label>
            </div>
           <div class="col-10">
              
              <select name="ref_cust_info_id" id="ref_cust_info_id" class="form-control" >
              <option value="NULL"></option>
               <?php 
               $result1=$dbcon->customerList();
               while($array1=mysqli_fetch_array($result1)){
                ?>
                <option value="<?php echo $array1['cust_info_id']; ?>"><?php echo $array1['cust_name']." || ".$array1['comp_name']; ?></option>
                <?php 
               }
                ?>
              
              </select>

            </div>
          </div><div class="row">
            <div class="col-2">
              <label class="lable-control">ref_amount:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="number" name="ref_amount" id="ref_amount" required>
            </div>
          </div><div class="row">
            <div class="col-2">
              <label class="lable-control">ref_paid_status</label>
            </div>
           <div class="col-10">
              <!-- <input class="form-control" type="text" name="ref_paid_status" id="ref_paid_status" >
             -->
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
              <label class="lable-control" >remark:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="remark" id="remark" required>
            </div>
          </div><div class="row">
            <div class="col-2">
              <label class="lable-control">d_status:</label>
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
              <label class="lable-control">d_date:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="date" name="d_date" id="d_date"required >
            </div>
          </div>
          <div class="row">
            <div class="col-2">
            </div>
            <div class="col-10">
              <input  type="submit" onclick="IsEmpty();" name="SAVE" value="SAVE" id="SAVE" class="btn btn-success">
              <input type="reset" name="SAVE" value="RESET"  id="SAVE" class="btn btn-success">
            </div>
          </div>
        </form>
      </div>
  <script src="js/popper.js"></script>
   <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>