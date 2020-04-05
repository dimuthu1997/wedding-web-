<!DOCTYPE html>
<html>
<head>
       <title>SUP Sign up Form</title>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
       <meta name="viewport" content="width=device-width, initial-scale=1, sharink-to-fit=no">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
       <link rel="stylesheet" type="text/css" href="styleeeee.css">
       <script src='https://kit.fontawesome.com/a076d05399.js'></script>
       </head>
       
<body>
      <div class="container-fluid">
      <div class="row">
              <div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
             <div class="col-lg-6 col-md-6 form-container">
             <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                    <div class="logo mb-3">
                    <img src="img/logo.png" width="150px">
                           
                    </div>
                    <form action="insert1.php" method="POST">
                           <div class="heading mb-4">
                    <h4>Create an account</h4>
                    </div>
                    <div class="form-input">
                           <span><i class="fa fa-building" aria-hidden="true"></i>
                           </span>
                           <input type="text" placeholder="Company Name" required name="companyname">
                           </div>
                           <div class="form-input">
                           <span><i class="fa fa-user"></i>
                           </span>
                           <input type="text" placeholder="Postal Code" required name="postalcode">
                           </div>
                           <div class="form-input">
                           <span><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                           <input type="text" placeholder="Business Category" required name="category">
                           </div>
                           <div class="form-input">
                           <span><i class="fa fa-user"></i></span>
                           <input type="text" placeholder="User Name" required name="suppliername">
                           </div>
                           <div class="form-input">
                           <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                           <input type="email" placeholder="Email" required name="email">
                           </div>
                           <div class="form-input">
                           <span><i class="fa fa-user"></i></span>
                           <input type="password" placeholder="Password" required name="password">
                           </div>
                           <div class="form-input">
                           <span><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                           <input type="text" placeholder="Phone Number" required name="phonenumber">
                           </div>
                           
                           
                        
                      <div class="text-left mb-3">
                           <button type="submit" class="btn">Sign up</button>
                           
                           
                           </div>
                           <div class="text-center mb-2">
                           <div class="mb-3" style="color: #000">or sign up with</div>
                                  
                                   <div class="socialMediaLinks">
                                          
                                         <a href="https://facebook.com" class="fab fa-facebook-f"></a>
                                         
                                          <a href="https://plus.google.com" class="fab fa-google-plus-g"></a>
                                         <a href="https://twitter.com" class="fab fa-twitter"></a>
                                  </div>
                                  
                                         
                                     
                           </div>
                           <div style="color: #000">Already have  an account<a href="login1.php" class="login-link"> Login here</a>
                                  
                           
                           </div> 
                           
                           
                           
                        
                      
                              
                    </form>
                         
                    </div>
             </div>
             </div>
            
              
            
       
       </div> 
       
       
       
       </body>

</html>