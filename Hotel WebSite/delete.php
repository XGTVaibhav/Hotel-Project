<?php
include("connection.php");

$id = $_GET['id'];

$query = "DELETE FROM contact WHERE id = '$id' ";

$data = mysqli_query($conn,$query);

if($data)
{
     echo "Record Deleted";
     
      header("location:display.php");

      
}
else
{
     echo "Failed To Delete";
}

?>