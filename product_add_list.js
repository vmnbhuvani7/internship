function validateForm() {
  var a = document.forms["productAdd"]["product_name"].value;
  if (a == "") {
    alert("Enter a  product name");
    return false;
  }
  var b = document.forms["productAdd"]["product_type"].value;
  if (b == "") {
    alert("Enter a product type");
    return false;
  }

  var c = document.forms["productAdd"]["rate"].value;  
  if (c == "") {
    alert("Enter a rate ");
    return false;
  }
  
  var d = document.forms["productAdd"]["product_version"].value;
  if (d == "") {
    alert("Enter a product version");
    return false;
  }
  var e = document.forms["productAdd"]["product_version_detail"].value;
  if (e == "") {
    alert("Enter a product version detail");
    return false;
  }
  var f = document.forms["productAdd"]["product_warrenty_month"].value;
  if (f == "") {
    alert("Enter a product warrenty month ");
    return false;
  }
}