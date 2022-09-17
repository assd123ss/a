<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=9999" />
    <title>Login</title>
</head>
<body>
<form action="login.php" method="post" name="frmlogin" >
    <div class="form">
  <div class="form__box">
    <div class="form__left">
      <div class="form__padding"><img class="form__image" src="https://i.pinimg.com/originals/8b/44/51/8b4451665d6b2139e29f29b51ffb1829.png"/></div>
    </div>
    <div class="form__right">
      <div class="form__padding-right">
      <h1 class="form__title">เข้าสู่ระบบ</h1>

            <input class="form__email" type="text" name="Username" id="Username" required placeholder="ผู้ใช้">
    

            <input  class="form__email" type="password" name="Password" id="Password" required placeholder="รหัสผ่าน">
      
        
       
        <input class="form__submit-btn"  type ="submit" value="เข้าสู่ระบบ">
        <a href="register.php"> สมัครสมาชิก</a>
        
    </form>
   

      </div>
    </div>
  </div>
</div>
</body>
</html>