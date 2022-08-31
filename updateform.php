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

<form action ="update.php"method="POST">
  <div class="form-field">
    <input name="username"type="text" placeholder="Username" required/>
  </div>
  
  <div class="form-field">
    <input name="password" type="password" placeholder="Password" required/>                         </div>
  
  <div class="form-field">
    <input  name ="submit"class="btn" type="submit" value = "Login"></input>
	
  </div>
</form>
<!-- partial -->
  
</body>
</html>
