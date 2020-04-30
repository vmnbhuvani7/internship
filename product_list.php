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
    <div class="container">
  <h2>Product List</h2>
  <p>If you can add a Product select a "Add Product" button.</p>

  <a href="product_add_list.php"><input type="submit" name="save" value="Add Product" class="btn btn-success" ></a>
</div><br>
<div style="overflow-x:auto;" class="container">
  <table>
    <thead>
    <tr>
      <th>product_list_id</th>
      <th>product_name</th>
      <th>product_type</th>
      <th>rate</th>
      <th>product_version</th>
      <th>product_version_detail</th>
      <th>product_warrenty_month</th>      
      <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php  
      $conn=mysqli_connect("localhost","root","","spider");
      $qry="select * from product_list";
      $result=mysqli_query($conn,$qry);
      if(mysqli_num_rows($result)>0){
        while($array=mysqli_fetch_array($result)){
          ?>
          
        <tr>
          <td><?php echo $array['product_list_id']; ?></td>
          <td><?php echo $array['product_name']; ?></td>
          <td><?php echo $array['product_type']; ?></td>
          <td><?php echo $array['rate']; ?></td>
          <td><?php echo $array['product_version']; ?></td>
          <td><?php echo $array['product_version_detail']; ?></td>
          <td><?php echo $array['product_warrenty_month']; ?></td>
          <td>
            <a href="product_edit.php?id=<?php echo $array['product_list_id']; ?>"><i class="fa fa-pencil"  aria-hidden="true"></i></a>
            <a href="product_delete.php?id=<?php echo $array['product_list_id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
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