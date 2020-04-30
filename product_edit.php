<?php

include 'DBConnection.php';
$dbcon = new DBConnection();
$dbcon->DBConnectionData();

$id = $_GET['id'];
$query = "select * from product_list where product_list_id='$id'";
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
    <title>project1</title><!-- 
    <script src="product_add_list.js"></script> onsubmit="return validateForm()" -->
  </head>
  <body>
    <?php include_once('index.php'); ?>
      <div class="container">
        <form id="productAdd" action="product_add_edit.php" method="post">
          <div class="row">
            <div class="col-2">
              <label class="label-control"></label>>product_list_id:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="product_list_id" id="product_list_id" value="<?php echo $array['product_list_id'] ?>" required>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <label class="label-control"></label>>product_name:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="product_name" id="product_name" value="<?php echo $array['product_name'] ?>" required>
            </div>
          </div>
            <div class="row">
            <div class="col-2">
              <label class="label-control">product_type:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="product_type" id="product_type" value="<?php echo $array['product_type'] ?>" required>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <label class="label-control">rate:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="rate" id="rates" value="<?php echo $array['rate'] ?>" required>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <label class="label-control">product_version</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="product_version" id="product_version" value="<?php echo $array['product_version'] ?>" required>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <label class="label-control">product_version_detail</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="text" name="product_version_detail" id="product_version_detail" value="<?php echo $array['product_version_detail'] ?>" required>
            </div>
          </div><div class="row">
            <div class="col-2">
              <label class="label-control">product_warrenty_month:</label>
            </div>
           <div class="col-10">
              <input class="form-control" type="date" name="product_warrenty_month" id="product_warrenty_month" value="<?php echo $array['product_warrenty_month'] ?>" required>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
            </div>
            <div class="col-10">
              <input type="submit" name="SAVE" value="SAVE" id="SAVE" class="btn btn-success">
              <input  type="reset" name="SAVE" value="RESET"  id="SAVE" class="btn btn-success">
            </div>
          </div>
        </form>
      </div>
  
   <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>