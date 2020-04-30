function validateForm() {
  var a = document.forms["sellerAdd"]["seller_name"].value;
  if (a == "") {
    alert("Enter a  product name");
    return false;
  }
  var b = document.forms["sellerAdd"]["seller_comp_name"].value;
  if (b == "") {
    alert("Enter a product type");
    return false;
  }

  var c = document.forms["sellerAdd"]["seller_mobile_no"].value;  
  if (c == "") {
    alert("Enter a rate ");
    return false;
  }
  
  var d = document.forms["sellerAdd"]["seller_address"].value;
  if (d == "") {
    alert("Enter a product version");
    return false;
  }
  var e = document.forms["sellerAdd"]["seller_join_date"].value;
  if (e == "") {
    alert("Enter a product version detail");
    return false;
  }
  var f = document.forms["sellerAdd"]["seller_remark"].value;
  if (f == "") {
    alert("Enter a product warrenty month ");
    return false;
  }
}