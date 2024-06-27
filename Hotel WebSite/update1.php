<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="home.css">
    <title>Update1</title>
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
    $query = "SELECT * FROM visitform WHERE id = '$id'";
    $query_show = mysqli_query($conn, $query);
    $show = mysqli_fetch_assoc($query_show);
?>

<body>
<div class="w3-container w3-padding-32" id="contact">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"></h3>
      <p>UPDATE VISIT PLAN.</p>
      <form action="#" method="POST">
        <input class="w3-input w3-border" type="text" placeholder="Name" value="<?php echo $show['Name'];?>" name="Name" required>
        <input class="w3-input w3-section w3-border" type="text" value="<?php echo $show['Email'];?>" placeholder="Email" name="Email" required>
        <input class="w3-input w3-section w3-border" type="text" value="<?php echo $show['Subject'];?>" placeholder="Subject" name="Subject" required>
        <input class="w3-input w3-section w3-border" type="text" value="<?php echo $show['Comment'];?>" placeholder="Comment" name="Comment" required>
        <button class="w3-button w3-black w3-section" type="submit" value="submit" class="btn" name="submit">
          <i class="fa fa-paper-plane"></i>SUBMIT</button>
      </form>
    </div>
</body>
</html>



<?php
error_reporting(1);
if (isset($_POST['submit'])) {

  $fname=$_POST['Name'];
  $email=$_POST['Email'];
  $subject=$_POST['Subject'];
  $comment=$_POST['Comment'];

  $sql= "UPDATE visitform SET Name='$fname',Email='$email',Subject='$subject',Comment='$comment' WHERE id='$id'";
  $data= mysqli_query($conn,$sql);

  if($data){
    echo "data insert sucessfuly";
    
    header("location:display1.php");

  }
  else{
    echo "data do not insert";

}
}

?>


