function validateForm() {
  var a = document.forms["customerAdd"]["comp_name"].value;
  if (a == "") {
    alert("Enter a  company name");
    return false;
  }
  var b = document.forms["customerAdd"]["cust_name"].value;
  if (b == "") {
    alert("Enter a Customer Name");
    return false;
  }
  var l = document.forms["customerAdd"]["address"].value;
  if (l == "") {
    alert("Enter a Customer address");
    return false;
  }

  var c = document.forms["customerAdd"]["mobile_no"].value;  
  if (c == "") {
    alert("Enter a customer mobile number ");
    return false;
  }
  
  var d = document.forms["customerAdd"]["bussiness_type"].value;
  if (d == "") {
    alert("Enter a bussiness type");
    return false;
  }
  var e = document.forms["customerAdd"]["whatsapp_no"].value;
  if (e == "") {
    alert("Enter a whatsapp number");
    return false;
  }
  var f = document.forms["customerAdd"]["ref_cust_info_id"].value;
  if (f == "") {
    alert("Enter a  refernce customer info id ");
    return false;
  }
  var g = document.forms["customerAdd"]["ref_amount"].value;
  if (g == "") {
    alert("Enter a  refernce amount ");
    return false;
  }
  var h = document.forms["customerAdd"]["ref_paid_status"].value;
  if (h == "") {
    alert("Enter a refernce paid status ");
    return false;
  }
  var i = document.forms["customerAdd"]["remark"].value;
  if (i == "") {
    alert("Enter a remark ");
    return false;
  }
  var j = document.forms["customerAdd"]["d_status"].value;
  if (j == "") {
    alert("Enter a d_status");
    return false;
  }
  var k = document.forms["customerAdd"]["d_date"].value;
  if (k == "") {
    alert("Enter a d_date ");
    return false;
  }
  
}