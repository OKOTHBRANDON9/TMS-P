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
        <label for="tender-id" class="form-label">Tender ID</label>
        <input type="text" class="form-control" id="tender-id" required>
      </div>
      <div class="mb-3">
        <label for="bid-amount" class="form-label">Bid Amount</label>
        <input type="text" class="form-control" id="bid-amount" required>
      </div>
      <div class="mb-3">
        <label for="bid-description" class="form-label">Bid Description</label>
        <textarea class="form-control" id="bid-description" rows="3" required></textarea>
      </div>
      <div class="mb-3">
        <label for="bid-documents" class="form-label">Bid Documents</label>
        <input type="file" class="form-control" id="bid-documents" multiple>
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