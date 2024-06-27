<?php
include("connection.php");

$id = $_GET['id'];

$query = "DELETE FROM visitform WHERE id = '$id' ";

$data = mysqli_query($conn,$query);

if($data)
{
     echo "Record Deleted";
     
      header("location:display1.php");

      
}
else
{
     echo "Failed To Delete";
}

?>