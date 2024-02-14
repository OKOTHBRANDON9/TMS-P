<?php
session_start();

include("connection.php");
include("function.php");

if (isset($_POST['tender_id']) && isset($_POST['vendor_id']) && isset($_POST['bid_amount']) && isset($_POST['bid_description'])) {
    $tender_id = $_POST['tender_id'];
    $vendor_id = $_POST['vendor_id'];
    $bid_amount = $_POST['bid_amount'];
    $bid_description = $_POST['bid_description'];

    // Validate and sanitize input data
    // ...

    $sql = "INSERT INTO bids (tender_id, vendor_id, bid_amount, bid_description) VALUES (?, ?, ?, ?)";

    $stmt = $con->prepare($sql);
    $stmt->bind_param("iiss", $tender_id, $vendor_id, $bid_amount, $bid_description);
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $con->error;
    }

    $stmt->close();
    $con->close();
} else {
    // Handle error: tender_id is required
    //echo "Error: tender_id is required.";
    //exit;
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
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
        <h1>Submit Bid</h1>
        <form id="bid-form">
          <div class="mb-3">
            <label for="tender_id" class="form-label">Tender ID</label>
            <input type="text" class="form-control" id="tender_id" required>
          </div>
          <div class="mb-3">
            <label for="vendor_id" class="form-label">Vendor ID</label>
            <input type="text" class="form-control" id="vendor_id" required>
          </div>
          <div class="mb-3">
            <label for="bid-_mount" class="form-label">Bid Amount</label>
            <input type="text" class="form-control" id="bid_amount" required>
          </div>
          <div class="mb-3">
            <label for="bid_description" class="form-label">Bid Description</label>
            <textarea class="form-control" id="bid_description" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="bid_documents" class="form-label">Bid Documents</label>
            <input type="file" class="form-control" id="bid_documents" multiple>
          </div>
          <button type="submit" class="btn btn-primary">Submit Bid</button>
        </form>
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
   


  <?php } ?>
  </body>
</html>



