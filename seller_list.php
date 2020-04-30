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
  <h2>Seller List</h2>
  <p>If you can add a Seller select a "Add Seller" button.</p>

  <a href="seller_add_list.php"><input type="submit" name="save" value="Add Seller" class="btn btn-success" ></a>
</div><br>
<div style="overflow-x:auto;" class="container">
  <table>
    <thead>
    <tr>
      <th>seller_info_id</th>
       <th>seller_name</th>
      <th>seller_comp_name</th>
      <th>seller_mobile_no</th>
      <th>seller_address</th>
      <th>seller_join_date</th>
     <th>seller_remark</th>
      <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php  
      $conn=mysqli_connect("localhost","root","","spider");
      $qry="select * from seller_info";
      $result=mysqli_query($conn,$qry);
      if(mysqli_num_rows($result)>0){
        while($array=mysqli_fetch_array($result)){
          ?>
        <tr>
          <td><?php echo $array['seller_info_id']; ?></td>
          <td><?php echo $array['seller_name']; ?></td>
          <td><?php echo $array['seller_comp_name']; ?></td>
          <td><?php echo $array['seller_mobile_no']; ?></td>
          <td><?php echo $array['seller_address']; ?></td>
          <td><?php echo $array['seller_join_date']; ?></td>
          <td><?php echo $array['seller_remark']; ?></td>
          <td>
            <a href="seller_edit.php?id=<?php echo $array['seller_info_id']; ?>"><i class="fa fa-pencil"  aria-hidden="true"></i></a>
            <a href="seller_delete.php?id=<?php echo $array['seller_info_id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
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