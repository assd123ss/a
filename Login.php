<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page with Background Image Example</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
  <?php
  include_once('conn.php');
  
  if (isset($_POST['submit'])) {
    echo $_POST['username']
  echo $_POST['password']
  }



  
  ?>

<div id="bg"></div>

<form>
  <div class="form-field">
    <input type="text" placeholder="Email / Username" required/>
  </div>
  
  <div class="form-field">
    <input type="password" placeholder="Password" required/>                         </div>
  
  <div class="form-field">
    <button class="btn" type="submit">Log in</button>
  </div>

  <div class="text-center">สมัครสมาชิก <a href="reg.html">Sign up</a></div>  
</form>
  
</body>
</html>
