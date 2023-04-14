<?php $conn = mysqli_connect("localhost", "root", "", "psychometric-test"); 

if($conn)
{
    // echo"connection is ok";
}
else
{
    echo"connection faild".mysqli_connect_error();
}
?>