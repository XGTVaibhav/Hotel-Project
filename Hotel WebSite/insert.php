
<?php 
 include("connection.php"); 
    if(isset($_POST['submit'])){
        $fname = $_POST['name'];
        $contactno = $_POST['contactno'];
        $email   = $_POST['email'];
        $bookingdate  = $_POST['bookingdate'];
        $people= $_POST['people'];
        $rooms = $_POST['rooms'];
       

       $query = "INSERT INTO `fnamerform`(`fname`,`lname`,`password`,`cpassword`,`gender`,`email`,`phone`,`address`)VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$add')";
       $data = mysqli_query($conn,$query);

       if($data){
        echo "Data Inserted Into Database";
       }
       else{
        echo "failed";
     
       }
    }
?>