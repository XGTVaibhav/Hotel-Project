<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Update</title>
</head>
<body>
    
</body>
</html>



<?php

include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
    //include 'connection.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM contact WHERE id = '$id'";
    $query_show = mysqli_query($conn, $query);
    $show = mysqli_fetch_assoc($query_show);
?>

<body>
<div class="w3-col m6 w3-padding-large w1-margin-top">

        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"></h3>
        <p class="fa-2x">UPDATE BOOKING DETAILS.</p>
        <form action="#" method="POST">
          <input class="w3-input w3-border" type="text" placeholder="Name"  value="<?php echo $show['name'];?>"  name="name" required>
          <input class="w3-input w3-section w3-border" type="text" value="<?php echo $show['contactno'];?>"  placeholder="Contact NO" name="contactno" required>
          <input class="w3-input w3-section w3-border" type="text" value="<?php echo $show['email'];?>"  placeholder="Email" name="email" required>
          <input class="w3-input w3-section w3-border" type="text" value="<?php echo $show['bookingdate'];?>"  placeholder="Booking Date" name="bookingdate" required>
          <input class="w3-input w3-section w3-border" type="text"value="<?php echo $show['people'];?>"  placeholder="People" name="people" required>
          <input class="w3-input w3-section w3-border" type="text" value="<?php echo $show['rooms'];?>"  placeholder="Rooms" name="rooms" required>

          <button class="w3-button w3-black w3-section" type="submit" value="submit" class="btn" name="submit">
            <i class="fa fa-paper-plane "></i> SUBMIT</button>
        </form>
    </div>
</div>
      </div>
</body>
</html>



<?php

    if (isset($_POST['submit'])) {

        $fname=$_POST['name'];
        $contactno=$_POST['contactno'];
        $email=$_POST['email'];
        $bookingdate=$_POST['bookingdate'];
        $people=$_POST['people'];
        $rooms=$_POST['rooms'];

  
        $sql= "UPDATE contact SET name='$fname',contactno='$contactno',email='$email',bookingdate='$bookingdate',people='$people',rooms='$rooms' WHERE id='$id'";
        $data= mysqli_query($conn,$sql);
      

  $data= mysqli_query($conn,$sql);

  if($data){
  echo "data insert sucessfuly";
  
  header("location:display.php");

  }
  else{
    echo "data do not insert";

}
    }

?>


