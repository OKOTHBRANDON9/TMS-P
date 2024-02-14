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
                  Login
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
    <h2>Video Tutorials</h2>
      <div class="video-wrapper">
        <!-- Embed video tutorials from YouTube or Vimeo -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/fG3RS_qGJ5M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
   </div>
    


   <div class="container">
    <div class="rfp-rfi-rfq-tender-section">
        <h2>RFP, RFI, RFQ, and Tender</h2>
        <p>Below are the documents and information for different types of requests and tender processes:</p>
        <ul>
          <li><a href="path_to_rfp_document.pdf" download>Download Request for Proposal (RFP)</a></li>
          <li><a href="path_to_rfi_document.pdf" download>Download Request for Information (RFI)</a></li>
          <li><a href="path_to_rfq_document.pdf" download>Download Request for Quotation (RFQ)</a></li>
          <li><a href="path_to_tender_document.pdf" download>Download Tender Documents</a></li>
        </ul>
      </div>
</div>

        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <ul class="faq-list"></ul>
        </div>
  
<div class="container">
    <h2>Help and Support</h2>
    <div class="contact-info">
      <h3>Technical Support</h3>
      <p>Email: <a href="mailto:support@example.com">support@example.com</a><br>Phone: +1-123-456-7890</p>
      <p>Hours: Mon-Fri, 9:00 AM - 5:00 PM</p>
    </div>


    <div class="contact-info">
      <h3>Procurement Officers</h3>
      <p>Email: <a href="mailto:procurement@example.com">procurement@example.com</a><br>Phone: +1-987-654-3210</p>
      <p>Hours: Mon-Fri, 8:00 AM - 4:00 PM</p>
    </div>


    <div class="contact-info">
      <h3>Vendor Help Desk</h3>
      <p>Email: <a href="mailto:vendorhelp@example.com">vendorhelp@example.com</a><br>Phone: +1-555-123-4567</p>
      <p>Hours: Mon-Fri, 9:00 AM - 6:00 PM</p>
    </div>

        <div class="container">
            <h2>Tender Calendar</h2>
    <div id="tender-calendar"></div>
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



