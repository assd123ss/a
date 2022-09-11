<?php
$conn = mysqli_connect("dberp.czr48qkizqnc.ap-southeast-1.rds.amazonaws.com","admin","0881085759Hot","dberp");
//set utf8
mysqli_query($conn, "SET NAMES 'utf8'");
echo date('Y-m-d H:i:s');
//set time zone
date_default_timezone_set('Asia/Bangkok');

?>