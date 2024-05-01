<?php  

include "index.php";

if(isset($_POST['Submit']))
{
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $sql = "select * from user where Username = '$username' and Password = '$password' ";
    $que = mysqli_query($conn,$sql);
    if(mysqli_num_rows($que)>0)
    {
        echo "<script> alert('login ok')</script>";
        echo "<script> window.open('insert.php','_self')</script>";
    }
    else
    {
        echo "<script> alert('wrong username and password')</script>";
    }
mysqli_close($conn);
}


?>
