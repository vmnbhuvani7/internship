function validateForm() {
  var x = document.forms["customerAdd"]["comp_name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}