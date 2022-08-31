<?php
include "conn.php";

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>เว็บสำหรับคนหล่อเข้าเท่านั้น !!!</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<div id="bg"></div>

<form action ="ai.php"method="POST">
  <div class="form-field">
    <input name="username"type="text" placeholder="Username" required/>
  </div>
  
  <div class="form-field">
    <input name="password" type="password" placeholder="Password" required/>                         </div>
  
  <div class="form-field">
    <input class="btn" type="submit" value = "Login"></input>
	
  </div>
</form>
<!-- partial -->
  
</body>
</html>
