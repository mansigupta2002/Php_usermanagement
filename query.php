<?php  

include "index.php";

$name = $_POST['uname'];
$Email=$_POST['mail'];
$query=$_POST['query'];

$sql= "insert into query (Name ,Email, Query)values ('$name','$Email','$query')";

if(mysqli_query($conn,$sql))
{
    echo "<script> alert('data inserted')</script>";
}
else{
    echo "error:".mysqli_error($conn);
}

mysqli_close($conn);