<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Classic Login Form Example</title>
  <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet"><link rel="stylesheet" href="./style.css">

</head>
<body>
    <?php

    include_once('conn.php');

    if (isset($_POST['do-login'])) {
      echo $_POST['username'];
      echo $_POST['password'];
    }
    ?>



<!-- partial:index.partial.html -->
<section class='login' id='login'>
  <div class='head'>
  <h1 class='company'>WebsoGood</h1>
  </div>
  <p class='msg'>Welcome back</p>
  <div class='form'>
    <form>
  <input type="text" placeholder='Username' class='text' id='username' required><br>
  <input type="password" placeholder='••••••••••••••' class='password'><br>
  <a href="#" class='btn-login' id='do-login'>Login</a>
  <a href="reg.html" class='forgot'>Register</a>
    </form>
  </div>
</section>
<footer>
  <p>So Good <span class='heart'>&hearts;</span> by Worarit </p>
 
</footer>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
