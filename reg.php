<?php  

include "index.php";

$name = $_POST['uname'];
$password=$_POST['pass'];
$Email=$_POST['mail'];
$username=$_POST['user'];

$sql= "insert into User (Name , Password, Email, Username)values ('$name','$password','$Email','$username')";

if(mysqli_query($conn,$sql))
{
    echo "<script> alert('data inserted')</script>";
}
else{
    echo "error:".mysqli_error($conn);
}

mysqli_close($conn);

?>