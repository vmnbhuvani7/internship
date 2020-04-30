<?php
include 'DBConnection.php';
  $dbcon= new DBConnection();
  $dbcon->DBConnectionData();
   $id = $_GET['id']; 
    $query = "SELECT * FROM seller_info WHERE seller_info_id = '$id'"; 
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
    <!-- <script src="seller_add_list.js"></script>  onsubmit="return validateForm()" -->
  </head>
  <body>
    <?php include_once('index.php'); ?>
      <div class="container">
        <form id="sellerAdd" action="seller_add_edit.php"  method="post">
          <div class="row">
            <div class="col-2">
              <label class="label-control">seller_info_id:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="seller_info_id" id="seller_info_id" value="<?php echo $array['seller_info_id']; ?>" readonly="readonly" required >
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <label class="label-control">seller_name:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="seller_name" id="seller_name" value="<?php echo $array['seller_name']; ?>" required >
            </div>
          </div>
            <div class="row">
            <div class="col-2">
              <label class="label-control">seller_comp_name:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="seller_comp_name" id="seller_comp_name"  value="<?php echo $array['seller_comp_name']; ?>" required >
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <label class="label-control">seller_mobile_no:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="seller_mobile_no" id="seller_mobile_no"  value="<?php echo $array['seller_mobile_no']; ?>" required >
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <label class="label-control">seller_address</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="seller_address" id="seller_address"  value="<?php echo $array['seller_address']; ?>" required >
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <label class="label-control">seller_join_date</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="date" name="seller_join_date" id="seller_join_date"  value="<?php echo $array['seller_join_date']; ?>"  required>
            </div>
          </div><div class="row">
            <div class="col-2">
              <label class="label-control">seller_remark:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="seller_remark" id="seller_remark"  value="<?php echo $array['seller_remark']; ?>" required >
            </div>
          </div>
          <div class="row">
            <div class="col-2">
            </div>
            <div class="col-10">
              <input  type="submit"  name="SAVE" value="SAVE" id="SAVE" class="btn btn-success">
              <input type="reset" name="SAVE" value="RESET"  id="SAVE" class="btn btn-success">
            </div>
          </div>
        </form>
      </div>
  
   <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>