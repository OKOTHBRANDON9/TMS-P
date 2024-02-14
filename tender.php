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
    <!-- navigation Code -->

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

    <!-- navigation Code end-->

    <!--body begins-->



    <div class="p-3 m-0 border-0 bd-example m-0 border-0 bd-example-cols">

   
  <div class="tenders-list">
    <div class="container-fluid">
      <h1>List of Tenders</h1>
      <div class="row row-cols-1 row-cols-md-3 g-2" id="tenders">
        <!-- Tenders will be dynamically populated here -->
        <div class="col">
          <div class="p-3" id="tender1">Custom column padding</div>
        </div>
        <div class="col">
          <div class="p-3" id="tender2">Custom column padding</div>
        </div>
        <div class="col">
          <div class="p-3" id="tender3">Custom column padding</div>
        </div>
        <div class="col">
          <div class="p-3" id="tender4">Custom column padding</div>
        </div>
        <div class="col">
            <div class="p-3" id="tender5">Custom column padding</div>
          </div>
          <div class="col">
            <div class="p-3" id="tender6">Custom column padding</div>
          </div>
          <div class="col">
            <div class="p-3" id="tender7">Custom column padding</div>
          </div>
          <div class="col">
            <div class="p-3" id="tender8">Custom column padding</div>
          </div><div class="col">
            <div class="p-3" id="tender9">Custom column padding</div>
          </div><div class="col">
            <div class="p-3" id="tender10">Custom column padding</div>
          </div>
          <div class="col">
            <div class="p-3" id="tender11">Custom column padding</div>
          </div>
          <div class="col">
            <div class="p-3" id="tender12">Custom column padding</div>
          </div>
          <div class="col">
            <div class="p-3" id="tender13">Custom column padding</div>
          </div>
          <div class="col">
            <div class="p-3" id="tender13">Custom column padding</div>
          </div>
          <div class="col">
            <div class="p-3" id="tender13">Custom column padding</div>
          </div>
          <div class="col">
            <div class="p-3" id="tender13">Custom column padding</div>
          </div>

      </div>
      <div class="pagination">
        <button id="prevBtn">Previous</button>
        <span id="currentPage">1</span>
        <button id="nextBtn">Next</button>
      </div>
    </div>
  </div>
    </div>







<script>
  document.addEventListener("DOMContentLoaded", function() {
  var tenderList = [
    // Your tender data here
    {
            id: 1,
            name: "Tender 1",
            openingDate: "2022-01-01",
            closingDate: "2022-01-31",
            
            description: "Description for Tender 1"
          },
          {
            id: 2,
            name: "Tender 2",
            openingDate: "2022-02-01",
            closingDate: "2022-02-28",
           
            description: "Description for Tender 2"
          },
          {
            id: 3,
            name: "Tender 3",
            openingDate: "2022-03-01",
            closingDate: "2022-03-31",
           
            description: "Description for Tender 3"
          },
          {
            id: 4,
            name: "Tender 4",
            openingDate: "2022-03-01",
            closingDate: "2022-03-31",
            
            description: "Description for Tender 3"
          },
          {
            id: 5,
            name: "Tender 5",
            openingDate: "2022-03-01",
            closingDate: "2022-03-31",
           
            description: "Description for Tender 3"
          },
          {
            id: 6,
            name: "Tender 6",
            openingDate: "2022-03-01",
            closingDate: "2022-03-31",
            
            description: "Description for Tender 3"
          },
          {
            id: 7,
            name: "Proposed upgrading works at Utangwa dispensary",
            openingDate: "2022-03-01",
            closingDate: "2022-03-31",
          
          },
          {
            id: 8,
            name: "Proposed upgrading works at Utangwa dispensary",
            openingDate: "2022-03-01",
            closingDate: "2022-03-31",
          
          },
          {
            id: 9,
            name: "Proposed upgrading works at Utangwa dispensary",
            openingDate: "2022-03-01",
            closingDate: "2022-03-31",
          
          },
          {
            id: 10,
            name: "Proposed upgrading works at Utangwa dispensary",
            openingDate: "2022-03-01",
            closingDate: "2022-03-31",
          
          },
          {
            id: 11,
            name: "Proposed upgrading works at Utangwa dispensary",
            openingDate: "2022-03-01",
            closingDate: "2022-03-31",
          
          },
          
          {
            id: 12,
            name: "Proposed upgrading works at Utangwa dispensary",
            openingDate: "2022-03-01",
            closingDate: "2022-03-31",
          
          },
          {
            id: 12,
            name: "Proposed upgrading works at Utangwa dispensary",
            openingDate: "2022-03-01",
            closingDate: "2022-03-31",
          
          },
          {
            id: 12,
            name: "Proposed upgrading works at Utangwa dispensary",
            openingDate: "2022-03-01",
            closingDate: "2022-03-31",
          
          },
          {
            id: 13,
            name: "Proposed upgrading works at Utangwa dispensary",
            openingDate: "2022-03-01",
            closingDate: "2022-03-31",
          
          }
  ];

  var currentPage = 1;
  var tendersPerPage = 9; // Number of tenders to display per page

  function displayTenders(tenders, startIndex, endIndex) {
    var tendersContainer = document.getElementById('tenders');
    tendersContainer.innerHTML = ''; // Clear the container

    for (var i = startIndex; i < endIndex; i++) {
      if (tenderList[i]) {
        var tender = tenderList[i];
        var tenderDiv = document.createElement('div');
        tenderDiv.className = 'col';
        tenderDiv.innerHTML = `
          <div class="p-3">
            <h6>${tender.name}</h6>
            <p>Visit: <a href="https://www.companywebsite.com" target="_blank">Company Website</a></p>
            <p>Tender: <a href="document.pdf" target="_blank">Documents</a></p>
            <p>Opening Date: ${tender.openingDate}</p>
            <p>Closing Date: ${tender.closingDate}</p>
            <button class="submit-button" onclick="location.href='submission-page.php'">Submit Bid</button>
          `;
        tendersContainer.appendChild(tenderDiv);
      }
    }
  }

  function showPage(page) {
    var startIndex = (page - 1) * tendersPerPage;
    var endIndex = startIndex + tendersPerPage;
    displayTenders(tenderList, startIndex, endIndex);
    document.getElementById('currentPage').textContent = page; // Update current page display

  }

  var prevBtn = document.getElementById('prevBtn');
  var nextBtn = document.getElementById('nextBtn');

  prevBtn.addEventListener('click', function() {
    if (currentPage > 1) {
      currentPage--;
      showPage(currentPage);
    }
  });

  nextBtn.addEventListener('click', function() {
    if (currentPage < Math.ceil(tenderList.length / tendersPerPage)) {
      currentPage++;
      showPage(currentPage);
    }
  });

  showPage(currentPage);
});

</script>
        <!-- tender list Code ends -->

<!--begin footer Code -->

        
            <footer class="footer-07">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 text-center">
                            
                            <p class="menu">
                                <a href="home.php">Home</a>
                                <a href="#">Tender Portal</a>
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







</body>
</html>