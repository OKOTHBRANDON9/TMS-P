<?php
session_start();


include("connection.php");
include("function.php");


$user_data = check_login($con);



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <link
    href="https://getbootstrap.com/docs/5.3/assets/css/docs.css"
    rel="stylesheet"
  />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="style.css">

  
</head>





<title>TMS</title>









    
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <!-- Example Code -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php">tender managenent system</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="logout.php"  class="btn btn-danger">Logout</a>
              </li>
              

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  USER
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="login-vendor.php">Vendor Login</a></li>
                  <li><a class="dropdown-item" href="login-tender-manager.php">Tender Manager Login</a></li> 
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="register-tender-manager.php">Tender Manager Registration</a></li>
                  <li><a class="dropdown-item" href="register-vendor.php">Vendor Registration</a></li>

                </ul>
              </li>


          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>

          
        </div>
      </div>
    </nav>

    <!-- End Example Code -->

    <!--body begins-->
                <!-- Hello, <?php // echo $user_data['user_name']; ?> !<br /> -->
				Welcome to the Tender Manager Dashboard.<br/>
				Please use the menu on the left side of this page to navigate through different features.
        To log out, click "Log Out" at the top right corner of your screen.
    <div class="container">           
    
            <p>To get started, click on the 'View Tenders' button below. Here, you will find information about available tenders and be able to register your interest in participating.</p>
            <button id="viewTendersButton">View Tenders</button>
    
            <p>To get more information the tendering process and what it is all about, click on the 'Tender E-Resource' button below.</p>
            <button id="onlineResourceButton">E-Resource</button>

    <script>
    document.getElementById('viewTendersButton').addEventListener('click', function() {
        window.location.href = 'tender.php';
    });
    
    document.getElementById('onlineResourceButton').addEventListener('click', function() {
        window.location.href = 'trainingpage.php';
    });
    </script>
    </div>




    <!-- End tender information Code -->

    

    <div class="container">
        
        <div class="board">
            <h2 class="text-light">Word form our customers</h2>
            <p class="text-light">Some of the fullfilled costomers reviews</p>

            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                <!-- Slides -->



                <div class="swiper-slide">
                      <div class="flex">
                          <div class="comments">
                              Hello, this is a sample comment. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                          </div>
                          <div class="profile">
                              <a href="#">Alice Johnson</a>
                              <span>Marketing Manager</span>
                          </div>
                      </div>
                  </div>

                <div class="swiper-slide">
                   <div class="flex">
                        <div class="comments">
                       "We have been using this tender management system for a few months now, and it has significantly streamlined our procurement process. 
                       The user-friendly interface and robust features have made it easy for our vendors to submit bids and for us to manage them. 
                       We highly recommend this system to any business looking to simplify their procurement process." 
                      </div> 
                      <div class="profile"> 
                      <a href="#">Jane Doe</a> 
                      <span>Director of Procurement</span> 
                          </div> 
                        </div> 
                    </div>

                <div class="swiper-slide">
                        <div class="flex">
                            <div class="comments">
                                I completely agree with this. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </div>
                            <div class="profile">
                                <a href="#">Emily Davis</a>
                                <span>Product Designer</span>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex">
                            <div class="comments">
                                Thank you for the great post! Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </div>
                            <div class="profile">
                                <a href="#">Michael Smith</a>
                                <span>Senior Developer</span>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
        
            </div>

        </div>
    </div>
    

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="./main.js"></script>

    
    
    <!-- End Review Code -->



        <div class="container">
            <footer class="footer-07">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 text-center">
                            
                            <p class="menu">
                                <a href="home.php">Home</a>
                                <a href="tender.php">Tender Portal</a>
                                <a href="about.php">About Us</a>
                                <a href="contact.php">Contact</a>
                                <a href="trainingpage.php"> E-Resource</a>
                             
                            </p>
                         
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12 text-center">
                            <p class="copyright">
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Tender Management System
                            </p>
                        </div>
                    </div>
                </div>

            </footer>
                <script src="js/jquery.min.js"></script>
                <script src="js/popper.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/main.js"></script>
                <!-- End footer Code -->
        </div>
   



  </body>
</html>



