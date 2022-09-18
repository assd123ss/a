<?php 
session_start();
        if(isset($_POST['Username'])){
				//connection
                  include("conn.php");
				//รับค่า user & password
                  $Username = $_POST['Username'];
                  $Password = md5($_POST['Password']);
				//query 
                  $sql="SELECT * FROM dberp Where Username='".$Username."' and Password='".$Password."' ";

                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["UserID"] = $row["ID"];
                      $_SESSION["User"] = $row["Firstname"]." ".$row["Lastname"];
                      $_SESSION["Userlevel"] = $row["Userlevel"];

                      if($_SESSION["Userlevel"]=="a"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        header("Location: admin_page.php");

                      }

                      if ($_SESSION["Userlevel"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        header("Location: user_page.php");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: form.php"); //user & password incorrect back to login again

        }
?>