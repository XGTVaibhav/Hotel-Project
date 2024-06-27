<?php
 include("connection.php"); 

?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Contact</title>
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
    <img class="w3-image" src="img/contact page 1.webp" alt="Architecture" width="1500" height="200">
    <div class="w3-display-middle w3-margin-top w3-center">
      <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>TipTop</b></span> <span class="w3-hide-small w3-text-light-grey">Hotel</span></h1>
    </div>
  </header>


     <!-- <div class="w3-row-padding w3-grayscale mt-5">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="img/person 1.jpeg" alt="John" style="width:100%">
        <h3>John Doe</h3>
        <p class="w3-opacity">CEO & Founder</p>
        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="img/person 4.jpeg" alt="Jane" style="width:100%">
        <h3>Jane Doe</h3>
        <p class="w3-opacity">Architect</p>
        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="img/person 7.avif" alt="Mike" style="width:100%">
        <h3>Mike Ross</h3>
        <p class="w3-opacity">Architect</p>
        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="img/person 5.webp" alt="Dan" style="width:100%">
        <h3>Dan Star</h3>
        <p class="w3-opacity">Architect</p>
        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
      </div>
    </div> -->

    <div class="w3-row w3-padding-64 m-lg-5 " id="about">
        <div class="w3-col m6 w3-padding-large w3-hide-small">
            <h2 class=" fa-5px ">CONTACT INFO  </h2>
            <span class="fa-5px">Hotel Tip Top International, <br>
                S.NO 153, Pune-Mumbai Highway, <br>
                Nr. Wakad Bridge,<br>
                Wakad, Pune - 411057.</span>
                <h3>CONTACT</h3>
                <span>020 63 11 11 11 <br>
                    +91 99870 00000</span>
                    <h3>EMAIL</h3>
                    <span>reservations@tiptophotel.in
                    </span>
     

                    <div class="google-map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15126.094758693338!2d73.7553298!3d18.5955006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b966a00b69c7%3A0x81e46eea40a311a0!2sHotel%20TipTop%20International!5e0!3m2!1sen!2sin!4v1695204057258!5m2!1sen!2sin" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
                 </div>
                    
    </div>
    <!-- Contact Section -->
    <div class="w3-col m6 w3-padding-large w1-margin-top">

        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"></h3>
        <p class="fa-2x">FOR BOOKING.</p>
        <form action="#" method="POST">
          <input class="w3-input w3-border" type="text" placeholder="Name"  name="name" required>
          <input class="w3-input w3-section w3-border" type="text" placeholder="Contact NO" name="contactno" required>
          <input class="w3-input w3-section w3-border" type="text" placeholder="Email" name="email" required>
          <input class="w3-input w3-section w3-border" type="text" placeholder="Booking Date" name="bookingdate" required>
          <input class="w3-input w3-section w3-border" type="text" placeholder="People" name="people" required>
          <input class="w3-input w3-section w3-border" type="text" placeholder="Rooms" name="rooms" required>

          <button class="w3-button w3-black w3-section" type="submit" value="submit" class="btn" name="submit">
            <i class="fa fa-paper-plane "></i> SUBMIT</button>
        </form>
    </div>
</div>
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
                    <a href="about.html" class="text-white">Luxury Rooms</a>
                  </li>
                  <li>
                    <a href="about.html" class="text-white">Banquet</a>
                  </li>
                  <li>
                    <a href="contact.html" class="text-white">Contact Us</a>
                  </li>
                  <li>
                    <a href="product.html" class="text-white">Products</a>
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
// error_reporting(0);
if (isset($_POST['submit'])) {

  $fname=$_POST['name'];
  $contactno=$_POST['contactno'];
  $email=$_POST['email'];
  $bookingdate=$_POST['bookingdate'];
  $people=$_POST['people'];
  $rooms=$_POST['rooms'];


  $sql= "INSERT INTO `contact`(`name`,`contactno`,`email`,`bookingdate`,`people`,`rooms`)  VALUES('$fname','$contactno','$email','$bookingdate','$people','$rooms')";
  $data= mysqli_query($conn,$sql);

  if($data){
    echo "Record Updated Successfully";
    
    
  }
  else{
    echo "data do not insert";

}
}

?>
