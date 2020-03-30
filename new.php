<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
  var k = document.forms["myForm"]["email"].value;
  var p = document.forms["myForm"]["pass"].value;
 
  if (k == "") {
    alert("Email must be filled out");
    return false;
  }
  if (p == "") {
    alert("Password must be filled out");
    return false;
  }
}
</script>
</head>
<body>

<form name="myForm" action="" onsubmit="return validateForm()" method="post">
  
  Email: <input type="text" name="email"><br>
  Password: <input type="Password" name="pass"><br>
  
  <input type="submit" value="Submit"><br>


</form>

</body>
</html>