<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'wedding';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM registered_user WHERE userid = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['userid']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
       <title>profile page</title>
           <link rel="stylesheet" type="text/css" href="style.css">
           <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
           <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	</head>
       <body>
        <header class="head">
       
       <div class="container-fluid">
       <nav class="navbar navbar-expand-md navbar-light">
       
              <a class="navbar-brand" href="#">
              <img id="brand-image" alt="website Logo" src="images/logo.png"> </a>
              <ul class="nav-item ml-auto">
              <a href="profile.php"  class="btn btn-dark btn-lg active" role="button" aria-pressed="true"><i class="fas fa-user-circle" style='font-size:24px'></i>Profile</a>                              
              <a href="logout.php" class="btn btn-dark btn-lg active"  role="button" aria-pressed="true"><i class="fas fa-sign-out-alt" style='font-size:24px'></i>Logout</a>
              </ul>
             
              </nav> 
        
       </div> 
       
       </header>
       <section>       
<!-- Image Slider --> 
       <div class="img-fluid ">       
       <div class="image">    
       <div class="container-fluid padding">
       <div class="banner1">
       <img src="img/photo1.jpg">
       </div>
       <div class="banner2">
       <img src="img/photo2.jpg">
       </div>
       <div class="banner3">
       <img src="img/photo3.jpg">
       </div>
       <div class="banner4">
       <img src="img/photo4.jpg">
       </div>
       <div class="banner5">
       <img src="img/photo5.jpg">
       </div>
       </div>
       </div> 
       </div>
         
      
 </section>       


<!-- Footer  --> 
<footer>
       <div class="container-fluid">
              
              <h3>Services</h3><br>
              
              <div class="row text-left">
              <div class="col-md-3">
              <p><a href="service/reception.html">Reception</a></p> 
              <p><a href="service/Catering.html">Catering</a></p>
              <p><a href="service/Photography%20&%20Vedio.html">Photography &amp; Vedio</a></p>
              <p><a href="service/music.html">Music</a></p>
                    
                     
              </div>
              <div class="col-md-3">
              <p><a href="service/Cultural%20Ceremonies.html">Cultural Ceremonies</a></p>
              <p><a href="service/Wedding%20Car.html">Wedding Car</a></p>
              <p><a href="service/Wedding%20Invitation.html">Wedding Invitation</a></p>
              <p><a href="service/Flowers%20&%20Decoration.html">Flowers &amp; Decoration</a></p>      

              </div>
              <div class="col-md-3">
              <p><a href="service/Entertainment.html">Entertainment</a></p>
              <p><a href="service/Wedding%20Cakes.html"> Wedding Cakes</a></p>
              <p><a href="service/Bridal%20Accessories.html">Bridal Accessories</a></p>
              <p><a href="service/Groom's%20Accessories.html">Groom's Accessories</a></p>       
              
              </div>
              <div class="col-md-3">
              <p><a href="service/Health%20&%20%20Beauty.html">Health &amp; Beauty</a></p>
              <p><a href="service/Jewellery.html">Jewellery</a></p>
              </div>
              
              <div class="col-md-12">
              <hr class="light-100">
                     <small>&copy; Copyright 2020, dreamwedding.lk Online Wedding Planning for Sri Lanka</small>
              </div>
              
                     
              </div>
       </div>
       </footer>      

 </body>      
</html>
