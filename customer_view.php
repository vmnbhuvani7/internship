<?php
  include 'DBConnection.php';
  $dbcon= new DBConnection();
  $dbcon->DBConnectionData();
  $id=$_GET['id'];
  $array1=$dbcon->customerList();
  $result=$dbcon->productSellInformation($id);
  //$array=mysqli_fetch_array($result);
 ?>

<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>project1</title>
  </head>
  <body>
    <?php include_once('index.php'); ?>
    <div class="container"><br>

      <a href="#"><input type="submit" name="save"  value="Customer Update Product" class="btn btn-success" ></a>
      <a href="#"><input type="submit" name="save"  value="Add Customer" class="btn btn-success" ></a>
      <a href="#"><input type="submit" name="save"  value="Add Customer" class="btn btn-success" ></a>
       <a href="#"><input type="submit" name="save"  value="Service" class="btn btn-success" ></a>
       <a href="#"><input type="submit" name="save"  value="Remark" class="btn btn-success" ></a>

      <h2>Customer Information</h2>
      <div class="row">
      
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card bg-primary text-white">
            <div class="card-body">
              <div class="media">
                <div class="media-body white text-left">
                  <h3 class="card-title">Updates</h3>
                  <span class="card-text">Conversion Rate</span>
                </div>
                <div class="media-right align-self-center">
                   <i class="fa fa-eye large" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card bg-dark text-white">
            <div class="card-body">
              <div class="media">
                <div class="media-body white text-left">
                  <h3 class="card-title">D-status</h3>
                  <span class="card-text">Conversion Rate</span>
                </div>
                <div class="media-right align-self-center">
                   <i class="fa fa-eye large" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card bg-warning text-white">
            <div class="card-body">
              <div class="media">
                <div class="media-body white text-left">
                  <h3 class="card-title">Call</h3>
                  <span class="card-text">Conversion Rate</span>
                </div>
                <div class="media-right align-self-center">
                   <i class="fa fa-eye large" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card bg-danger text-white">
            <div class="card-body">
              <div class="media">
                <div class="media-body white text-left">
                  <h3 class="card-title">Remark</h3>
                  <span class="card-text">Conversion Rate</span>
                </div>
                <div class="media-right align-self-center">
                   <i class="fa fa-eye large" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><br>
      <div class="row">
        <div class="col-10">
        <h3>Customer Information</h3>
        </div>
        <div class="col-2">
        <a href="#"><input type="submit" name="save"  value="Customer Edit" class="btn btn-success" ></a>
        </div>
      </div>
      <hr>
      <div class="row">
          <div class="col-4">
            <h4 class="text-info">Company Name</h4>
          </div>
          <div class="col-4">
            <h4 class="text-info">Customer Name</h4>
          </div>
          <div class="col-4">
            <h4 class="text-info">Address</h4>
          </div>
      </div>
      <div class="row">
          <div class="col-4">
            <input type="text" name="" >
          </div>
          <div class="col-4">
            <input type="text" name="" >
          </div>
          <div class="col-4">
            <input type="text" name="" >
          </div>
      </div>
      <div class="row">
          <div class="col-4">
            <h4 class="text-info">Bussiness Type:</h4>
          </div>
          <div class="col-4">
            <h4 class="text-info">Mobile No:</h4>
          </div>
          <div class="col-4">
            <h4 class="text-info">Whatsapp No:</h4>
          </div>
      </div>
      <div class="row">
          <div class="col-4">
            <input type="text" name="" >
          </div>
          <div class="col-4">
            <input type="text" name="" >
          </div>
          <div class="col-4">
            <input type="text" name="" >
          </div>
      </div>
      <div class="row">
          <div class="col-4">
            <h4 class="text-info">Refrance cust Id</h4>
          </div>
          <div class="col-4">
            <h4 class="text-info">Refrance Amount</h4>
          </div>
          <div class="col-4">
            <h4 class="text-info">Refrance Paid Status</h4>
          </div>
      </div>
      <div class="row">
          <div class="col-4">
            <input type="text" name="" >
          </div>
          <div class="col-4">
            <input type="text" name="" >
          </div>
          <div class="col-4">
            <input type="text" name="" >
          </div>
      </div>
      <div class="row">
          <div class="col-4">
            <h4 class="text-info">Remark</h4><h4 class="text-info"></h4>
          </div>
          <div class="col-4">
            <h4 class="text-info">D Status</h4>
          </div>
          <div class="col-4">
            <h4 class="text-info">D Date</h4>
          </div>
      </div>
      <div class="row">
          <div class="col-4">
            <input type="text" name="" >
          </div>
          <div class="col-4">
            <input type="text" name="" >
          </div>
          <div class="col-4">
            <input type="text" name="" >
          </div>
      </div><br>
      <div class="row">
        <div class="col-10">
        <h3>Product List Sell</h3>
        </div>
        <div class="col-2">
        <a href="#"><input type="submit" name="save"  value="Product Sell Edit" class="btn btn-success" ></a>
        </div>
      </div>
      <hr>
      <div class="row">
          <div class="col-4">
            <h4 class="text-info">Customer Name:</h4>
          </div>
          <div class="col-4">
            <h4 class="text-info">Product Name:</h4>
          </div>
          <div class="col-4">
            <h4 class="text-info">Product Type</h4>
          </div>
      </div>
      <div class="row">
          <div class="col-4">
            <input type="text" name="" >
          </div>
          <div class="col-4">
            <input type="text" name="" >
          </div>
          <div class="col-4">
            <input type="text" name="" >
          </div>
      </div>
      <div class="row">
          <div class="col-4">
            <h4 class="text-info">Rate</h4>
          </div>
          <div class="col-4">
            <h4 class="text-info">Product Version</h4>
          </div>
          <div class="col-4">
            <h4 class="text-info">Product Version detail</h4>
          </div>
      </div>
      <div class="row">
          <div class="col-4">
            <input type="text" name="" >
          </div>
          <div class="col-4">
            <input type="text" name="" >
          </div>
          <div class="col-4">
            <input type="text" name="" >
          </div>
      </div>
      <div class="row">
          <div class="col-4">
            <h4 class="text-info">Product Warrenty Month</h4>
          </div>
          <div class="col-4">
            <h4 class="text-info">Product Invoice No</h4>
          </div>
          <div class="col-4">
            <h4 class="text-info">Training</h4>
          </div>
      </div>
      <div class="row">
          <div class="col-4">
            <input type="text" name="" >
          </div>
          <div class="col-4">
            <input type="text" name="" >
          </div>
          <div class="col-4">
            <input type="text" name="" >
          </div>
      </div>
      <div class="row">
          <div class="col-4">
            <h4 class="text-info">COD</h4>
          </div>
          <div class="col-4">
            <h4 class="text-info">Sell Date</h4>
          </div>
          <div class="col-4">
            <h4 class="text-info">U Serial</h4>
          </div>
      </div>
      <div class="row">
          <div class="col-4">
            <input type="text" name="" >
          </div>
          <div class="col-4">
            <input type="text" name="" >
          </div>
          <div class="col-4">
            <input type="text" name="" >
          </div>
      </div>
      <div class="row">
          <div class="col-4">
            <h4 class="text-info">U Serial Enc</h4>
          </div>
      </div>
      <div class="row">
          <div class="col-4">
            <input type="text" name="" >
          </div>
      </div>
      <br>
      <div class="row">
        <div class="col-10">
        <h3>Product Update</h3>
        </div>
      </div>
      <hr>
      <table>
        <tr>
        <thead>
          <th>product_name</th>
          <th>product_date</th>
          <th>product_version</th>
          <th>product_version_detail</th>
          <th>Action</th>
          
        </thead>
        </tr>
        <tbody>
          <?php  
          $conn=mysqli_connect("localhost","root","","spider");
          $qry="select * from product_info_update";
          $result=mysqli_query($conn,$qry);
          if(mysqli_num_rows($result)>0){
            while($array=mysqli_fetch_array($result)){
              ?>
            <tr>
              <td><?php echo $array['product_name']; ?></td>
              <td><?php echo $array['product_date']; ?></td>
              <td><?php echo $array['product_version']; ?></td>
              <td><?php echo $array['product_version_detail']; ?></td>
              <td>
                
                
              </td>
              <?php
                }
                 }
              ?>
            </tr>
        </tbody>
      </table>

      <div class="row">
        <div class="col-10">
        <h3>Product Update</h3>
        </div>
      </div>
      <hr>
      <table>
        <tr>
        <thead>
          <th>product_name</th>
          <th>product_date</th>
          <th>product_version</th>
          <th>product_version_detail</th>
          <th>Action</th>
          
        </thead>
        </tr>
        <tbody>
          <?php  
          $conn=mysqli_connect("localhost","root","","spider");
          $qry="select * from product_info_update";
          $result=mysqli_query($conn,$qry);
          if(mysqli_num_rows($result)>0){
            while($array=mysqli_fetch_array($result)){
              ?>
            <tr>
              <td><?php echo $array['product_name']; ?></td>
              <td><?php echo $array['product_date']; ?></td>
              <td><?php echo $array['product_version']; ?></td>
              <td><?php echo $array['product_version_detail']; ?></td>
              <td>
                
                <a href="customer_edit.php?id=<?php echo $array['product_info_id']; ?>"><i class="fa fa-pencil"  aria-hidden="true"></i></a>
                <a href="customer_delete.php?id=<?php echo $array['product_info_id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </td>
              <?php
                }
                 }
              ?>
            </tr>
        </tbody>
      </table>
      


      

</div>
<!-- <script src="js/popper.js"></script> -->
   <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>