<?php
include "conn.php";

$id = $_GET['id'];
    $del = "DELETE 
    FROM adminlogin
    WHERE id = '$id'";
    $result = mysqli_query($conn,$del);
    

    if($result){
        echo "<script>alert('Delete Success')</script>";
        echo "<script>window.location='b.php'</script>";
    }
    else{
        echo "<script>alert('Delete Failed')</script>";
        echo "<script>window.location='b.php'</script>";
    }


?>