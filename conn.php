<?php
    $servername = "dberp.czr48qkizqnc.ap-southeast-1.rds.amazonaws.com";
    $sys_user ="admin";
    $sys_password = "0881085759Hot";
    $database_name = "dberp";
    $conn = mysqli_connect($servername,$sys_user,$sys_password,$database_name) or die(mysql_error());        
    if(!$con) { //ใช้ if ตรวจสอบถ้าติดต่อไม่ได้ให้แจ้ง
        echo "Err: Disconnect Db";
        die();
        }else { //บันทัดนี้ไม่เอาก็ได้
        echo "Ok! Connecting...";
        } 
?>