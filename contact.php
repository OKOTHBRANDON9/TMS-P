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
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
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

    <div class="container">
        <div class="contact-section">
            <h1>Contact Us</h1>
            <p>Have questions about our tender management system? We're here to help. Feel free to reach out to us using the contact details below or use the form to send us a message.</p>
            <div class="contact-details">
              <h2>Contact Information</h2>
              <p><strong>Address:</strong> [Your Company Address]</p>
              <p><strong>Phone:</strong> [Your Company Phone Number]</p>
              <p><strong>Email:</strong> [Your Company Email Address]</p>
            </div>
            <div class="contact-form">
              <h2>Send Us a Message</h2>
              <form action="submit_contact_form.php" method="post">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <input type="submit" value="Send Message">
              </form>
            </div>
          </div>
    </div>
   

  


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="./main.js"></script>
    <!-- End tender information Code -->

    

  
      



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



