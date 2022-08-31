<?php
include "conn.php";
if (isset($_POST['submit'])) {
    # code...

$id = $_POST['id'];
$username =$_POST['username'];
$password =$_POST['password'];
    $update = "UPDATE adminlogin
    SET username = '$username',
        password = '$password'
    WHERE id = '$id'";
    $result = mysqli_query($conn,$update);
    

    if($result){
        echo "<script>alert('Update Success')</script>";
        echo "<script>window.location='b.php'</script>";
    }
    else{
        echo "<script>alert('Update Failed')</script>";
        echo "<script>window.location='b.php'</script>";
    }

}
else {
    echo "ควย";
}
?>