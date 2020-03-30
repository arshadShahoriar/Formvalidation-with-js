<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
  var a= document.forms["myForm"]["name"].value;
  var b = document.forms["myForm"]["email"].value;
  var d = document.forms["myForm"]["pass"].value;
  if (a == "") {
    alert("Name must be filled out");
    return false;
  }
  if (b == "") {
    alert("Email must be filled out");
    return false;
  }
  if (d == "") {
    alert("Password must be filled out");
    return false;
  }
}
</script>
</head>
<body>

<form name="myForm" action="" onsubmit="return validateForm()" method="post">
  Name: <input type="text" name="name"><br>
  Email: <input type="text" name="email"><br>
  Password: <input type="Password" name="pass"><br>
  
  <input type="submit" value="Submit"><br>

<p>Already have an account? <a href="new.php">Sign in</a>.</p>
</form>

</body>
</html>