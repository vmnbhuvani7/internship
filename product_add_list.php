<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>project1</title><!-- 
    <script src="product_add_list.js"></script> onsubmit="return validateForm()"  -->
  </head>
  <body>
    <?php include_once('index.php'); ?>
      <div class="container">
        <form id="productAdd" action="product_add.php"method="post">
          
          <div class="row">
            <div class="col-2">
              <label>product_name:</label>
            </div>
           <div class="col-10">
              <input type="text" name="product_name" id="product_name" class="form-control" required>
            </div>
          </div>
            <div class="row">
            <div class="col-2">
              <label>product_type:</label>
            </div>
           <div class="col-10">
              <input type="text" name="product_type" id="product_type" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <label>rate:</label>
            </div>
           <div class="col-10">
              <input type="text" name="rate" id="rates" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <label>product_version</label>
            </div>
           <div class="col-10">
              <input type="text" name="product_version" id="product_version" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <label>product_version_detail</label>
            </div>
           <div class="col-10">
              <input type="text" name="product_version_detail" id="product_version_detail" class="form-control" required>
            </div>
          </div><div class="row">
            <div class="col-2">
              <label>product_warrenty_month:</label>
            </div>
           <div class="col-10">
              <input type="date" name="product_warrenty_month" id="product_warrenty_month" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
            </div>
            <div class="col-10">
              <input type="submit" name="SAVE" value="SAVE" id="SAVE" class="btn btn-success">
              <input type="reset" name="SAVE" value="RESET"  id="SAVE" class="btn btn-success">
            </div>
          </div>
        </form>
      </div>
  
   <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>