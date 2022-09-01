<?php
include "conn.php";

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page with Background Image Example</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<div id="bg"></div>

<form method="POST">
  <div class="form-field">
    <input name="username"type="text" placeholder="Username" required/>
  </div>
  
  <div class="form-field">
    <input name="password" type="password" placeholder="Password" required/>                         </div>

    
  <div class="form-field">
    <input name="Email" type="Email" placeholder="Email" required/>                         </div>

    <div class="form-field">
    <input name="Phone" type="text" placeholder="Phone" required/>                         </div>



    
    
  
  <div class="form-field">
    <input name ="submit" class="btn" type="submit" value = "Register"></input>
	
  </div>
</form>
<!-- partial -->
  
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $username =$_POST['username'];
    $password =$_POST['password'];
    $Email =$_POST['Email'];
    $Phone =$_POST['Phone'];
  


$sql = "SELECT * FROM adminlogin WHERE username = '$username'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    echo "<script>alert('Username Aleady')</script>";
    echo "<script>window.location='Register.php'</script>";
}
else{
    $insert = "INSERT INTO adminlogin (username,password) VALUES ('$username','$password')";
    $result = mysqli_query($conn,$insert);
    echo "<script>alert('Register Success')</script>";
    echo "<script>window.location='index.php'</script>";
}
}
?>

