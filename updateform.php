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
<?php
$id = $_GET['id'];
 $sql = "SELECT * FROM adminlogin WHERE id ='$id'";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($result);  
 
 ?>

<form action ="update.php"method="POST">
<input value = "<?php echo $row['id'] ?>" name="id"type="hidden" placeholder="Username" required/>
  <div class="form-field">
    <input value = "<?php echo $row['username'] ?>" name="username"type="text" placeholder="Username" required/>
  </div>
  
  <div class="form-field">
    <input value = "<?php echo $row['password'] ?>" name="password" type="password" placeholder="Password" required/>                         </div>
  
 
    <input  name ="submit"class="btn" type="submit" value = "Login"></input>
	

</form>
<!-- partial -->
  
</body>
</html>
