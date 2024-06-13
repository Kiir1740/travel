<?php

session_start();


$hostname="localhost";
$user="root";
$password="";
$db="travel";

$data=mysqli_connect($hostname,$user,$password,$db);

if($data===false)
 {
    die("Connection error");
 }

// Process registration form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission

     $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
   








        $sql="INSERT INTO user(username,email,phone,message) VALUES('$username','$email','$phone','$message')";

        $result=mysqli_query($data,$sql);
    
     

     if($result)
     {

        echo "New record created successfully";
        //echo "A Student has been registered";
    }

    else{
        echo "Invalid Details";
    }
}

?>







<html>
<head>
    <title>Travel Agency form</title>
    <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="css/main.css" />
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <!-- Section: Contact -->
<section id="contact" class="section section-contact scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12 m6">
          <div class="card-panel black-text center">
            <i class="material-icons medium">email</i>
            <h5>Contact Wonderland Travel Agency</h5>
            <p>Wanderland Travel Agency invites you to embark on a journey where every step is a discovery and every moment is filled with wonder.</p>
          </div>
          <ul class="collection with-header">
            <li class="collection-header">
              <h4>Headquarters</h4>
            </li>
            <li class="collection-item">Contact Wanderland Travel Agency</li>
            <li class="collection-item">Munyenga, Kampala, Uganda</li>
          </ul>
        </div>
        <div class="col s12 m6">
          <div class="card-panel grey lighten-3">

            <form action="#" method="POST">

            <h5>Please fill out this form</h5>
            <div class="input-field">
              <input type="text" placeholder="Name" id="name" name="username">
              <label for="name">Name</label>
            </div>
            <div class="input-field">
              <input type="email" placeholder="Email" id="email" name="email">
              <label for="email">Email</label>
            </div>
            <div class="input-field">
              <input type="text" placeholder="Phone" id="phone" name="phone">
              <label for="phone">Phone</label>
            </div>

            <div class="input-field">
              <textarea class="materialize-textarea" placeholder="Like Cancun, Mexico, The Bahamas" id="message" name="message"></textarea>
              <label for="message">Message</label>
            </div>

            <input type="submit" value="submit" class="btn">
          </div>

        </div>

            </form>
            

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="section darken-2 white-text center">
    <p id="p-footer" class="flow-text">Wanderland Travel Agency &copy; 2024</p>
  </footer>

    <!--IMPORTANT!!! - - - Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    $(document).ready(function () {
      // Init Side nav
      $('.button-collapse').sideNav();

      // Init Slider
      $('.slider').slider({
        indicators: false,
        height: 500,
        transition: 500,
        interval: 6000
      });

      // Autocomplete
      $('.autocomplete').autocomplete({
        data: {
          "Aruba": null,
          "Cancun Mexico": null,
          "Hawaii": null,
          "Florida": null,
          "California": null,
          "Jamaica": null,
          "Europe": null,
          "Bahamas": null,
          "Alaska": null,
          "Montana": null,
          "Virgin Islands": null,
          "Spain": null,
          "Austrailia": null
        }
      });

      // Init Scrollspy
      $('.scrollspy').scrollSpy();

    });
  </script>
</body>
</html>