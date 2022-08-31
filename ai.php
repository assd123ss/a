<?php
include "conn.php";

if (isset ($_POST['username'])&&isset ($_POST['password'])) {
    $username =$_POST['username'];
    $password =$_POST['password'];
   $sql="select * from adminlogin where username ='$username' and password = '$password'";
   $result = mysqli_query($conn,$sql);
   if (mysqli_num_rows($result) == 1) {
    echo "เข้าสำเร็จ";


   }
   else {
    echo "รหัสผิด";
   }
}
?>