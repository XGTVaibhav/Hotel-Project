<?php
 include("connection.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="home.css">
    

</head>
<body>
    
<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
      <a href="#" class="w3-bar-item w3-button"><b>TipTop</b>Hotel</a>
      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
        <a href="index.php" class="w3-bar-item w3-button">HOME</a>
        <a href="about.php" class="w3-bar-item w3-button">ABOUT US</a>
        <a href="services.php" class="w3-bar-item w3-button">SERVICE</a>
        <a href="contact.php" class="w3-bar-item w3-button">CONTACT </a>
        <a href="product.php" class="w3-bar-item w3-button">PRODUCT</a>

      </div>
    </div>
  </div>
  
  <!-- Header -->
  <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    <img class="w3-image" src="img/hotel.jpg" alt="Architecture" width="1500" height="500">
    <div class="w3-display-middle w3-margin-top w3-center">
      <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>TipTop</b></span> <span class="w3-hide-small w3-text-light-grey">Hotel</span></h1>
    </div>
  </header>
  
  

  <!-- Page content -->
  <div class="w3-margin-top ">
  
    <!-- Project Section -->
    <!-- <div class="w3-container w3-padding-32" id="projects">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projects</h3>
    </div> -->
  
    <div class="w3-row-padding ">
      <div class="w3-col l3 m6 w3-margin-bottom w3-hover-orange">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Corporate</div>
          <img src="img/corporate.jpg" alt="House" style="width:100%">
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom w3-hover-orange">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Dine</div>
          <img src="img/dine.jpg" alt="House" style="width:100%">
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom w3-hover-orange">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Function</div>
          <img src="img/function.jpg" alt="House" style="width:100%">
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom w3-hover-orange">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Meating</div>
          <img src="img/meating.jpg" alt="House" style="width:100%">
        </div>
      </div>
    </div>
  
    <div class="w3-row-padding">
      <div class="w3-col l3 m6 w3-margin-bottom w3-hover-orange">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Rooms</div>
          <img src="img/Rooms.jpg" alt="House" style="width:99%"> 
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom w3-hover-orange">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Wedding Hall</div>
          <img src="img/wedding.jpg" alt="House" style="width:99%">
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom w3-hover-orange">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Hall</div>
          <img src="img/Hall.webp" alt="House" style="width:99%" height="200px">
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom w3-hover-orange">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Wedding</div>
          <img src="img/hotel-tip-top-international-hotel-tip-top-international-1.jpg" alt="House" style="width:99%" height="200px">
        </div>
      </div>
    </div>
  
    <!-- About Section -->
    <div class="cont">
    <div class="w3-container w3-padding-32" id="about">
      <h3 class=" w3-border-bottom w3-border-light-grey w3-padding-16">Welcome to Hotel TipTop International </h3>
      <p>A luxurious stay awaits at the heart of Pune, The Tip Top International Hotel embodies the spirit of the city. Our guests can retreat to a space that is a mix <br> of comfortable and chic, with thoughtful room décor that was designed keeping in mind the needs of our guests. All rooms include the excellent services and <br>comforts of a sophisticated premium business hotel. Hotel Tip Top International is a contemporary pure vegetarian hotel with a prime location on Puneas one of <br>India’s most liveable cities, the cultural capital of Maharashtra.
      </p>
    </div>
  </div>
  

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="img/building-1.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">Hotel TipTop Experience </h1><br>
      
      <p class="w3-large">At TipTop International, Everything is curated to tickle one's senses. Our philosophy is not to provide a mere service but a distinctive experience to our Guests.</p>
      <p class="w3-large w3-text-grey w3-hide-medium">TipTop International specializes in tailored packages concerning one's tastes and preferences, whether a wedding, a Function, or a corporate event..</p>
    </div>
  </div>
   
  
    <!-- Contact Section -->
    <div class="w3-container w3-padding-32" id="contact">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"></h3>
      <p>PLAN A VISIT.</p>
      <form action="#" method="POST">
        <input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required>
        <input class="w3-input w3-section w3-border" type="text" placeholder="Email" name="Email" required>
        <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" name="Subject" required>
        <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" name="Comment" required>
        <button class="w3-button w3-black w3-section" type="submit" value="submit" class="btn" name="submit">
          <i class="fa fa-paper-plane"></i>SUBMIT</button>
      </form>
    </div>
    
 
  
  
<div class="foter">
  <!-- Footer -->
  <footer class="bg-dark text-center text-white">
      <!-- Grid container -->
      <div class="container p-4">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a class="btn btn-outline-light btn-floating m-1" href="/www.facebook.com" role="button"
            ><i class="fab fa-facebook-f"></i
          ></a>
    
          <!-- Twitter -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-twitter"></i
          ></a>
    
          <!-- Google -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-google"></i
          ></a>
    
          <!-- Instagram -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-instagram"></i
          ></a>
    
          <!-- Linkedin -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-linkedin-in"></i
          ></a>
    
          <!-- Github -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-github"></i
          ></a>
        </section>
        <!-- Section: Social media -->
    
        <!-- Section: Form -->
        <section class="">
          <form action="">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
              <!--Grid column-->
              
    
        <!-- Section: Text -->
        <section class="mb-4">
         
        </section>
        <!-- Section: Text -->
    
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <img src="img/logo-2.png" alt="">
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Usefull Link</h5>
    
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="about.php" class="text-white">Luxury Rooms</a>
                </li>
                <li>
                  <a href="about.php" class="text-white">Banquet</a>
                </li>
                <li>
                  <a href="contact.php" class="text-white">Contact Us</a>
                </li>
                <li>
                  <a href="product.php" class="text-white">Products</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Usefull Link</h5>
    
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">E-Brochure</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Promise Of Safety</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Privacy Policy </a>
                </li>
                <li>
                  <a href="#!" class="text-white">Terms of Use</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Cancellation Policy</a>
                </li>
                
              </ul>
            </div>
            <!--Grid column-->
    
            
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
      </div>
      <!-- Grid container -->
    
      
    </footer>
    <!-- Footer -->
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

  $sql= "INSERT INTO `visitform`(`Name`,`Email`,`Subject`,`Comment`)  VALUES('$fname','$email','$subject','$comment')";
  $data= mysqli_query($conn,$sql);

  if($data){
    echo "Record Updated Successfully";
    
  }
  else{
    echo "data do not insert";

}
}

?>