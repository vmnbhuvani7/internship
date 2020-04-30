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
<h2>Customer List</h2>
<p>If you can add a customer select a "Add Customer" button.</p>

<a href="customer_add_list.php"><input type="submit" name="save" value="Add Customer" class="btn btn-success" ></a>
</div>
<br>
<div style="overflow-x:auto;" class="container">
  <table>
    <tr>
    <thead>
      <th>cust_info_id</th>
      <th>comp_name</th>
      <th>cust_name</th>
      <th>address</th>
      <th>mobile_no</th>
      <th>bussiness_type</th>
      <th>whatsapp_no</th>
      <th>ref_cust_info_id</th>
      <th>ref_amount</th>
      <th>ref_paid_status</th>
      <th>remark</th>
      <th>d_status</th>
      <th>d_date</th>
      <th>Action</th>
      
    </thead>
  </tr>
    <tbody>
      <?php  
      $conn=mysqli_connect("localhost","root","","spider");
      $qry="select * from cust_info";
      $result=mysqli_query($conn,$qry);
      if(mysqli_num_rows($result)>0){
        while($array=mysqli_fetch_array($result)){
          ?>
        <tr>
          <td><?php echo $array['cust_info_id']; ?></td>
          <td><?php echo $array['comp_name']; ?></td>
          <td><?php echo $array['cust_name']; ?></td>
          <td><?php echo $array['address']; ?></td>
          <td><?php echo $array['mobile_no']; ?></td>
          <td><?php echo $array['bussiness_type']; ?></td>
          <td><?php echo $array['whatsapp_no']; ?></td>
          <td><?php echo $array['ref_cust_info_id']; ?></td>
          <td><?php echo $array['ref_amount']; ?></td>
          <td><?php echo $array['ref_paid_status']; ?></td>
          <td><?php echo $array['remark']; ?></td>
          <td><?php echo $array['d_status']; ?></td>
          <td><?php echo $array['d_date']; ?></td>
          <td>
            <a href="customer_view.php?id=<?php echo $array['cust_info_id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
            <a href="customer_edit.php?id=<?php echo $array['cust_info_id']; ?>"><i class="fa fa-pencil"  aria-hidden="true"></i></a>
            <a href="customer_delete.php?id=<?php echo $array['cust_info_id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
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