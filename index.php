
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="css/hello.css" />

</head>

<body>
  <!-- here a div will contain navbar -->
  <header class="header">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand logo-style" href="/">
        <h3>Sayed</h3>
      </a>
      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="multi-collapse">
        <span class="navbar-toggler-icon" style="color: rgb(56, 211, 211);"></span>
      </button>
      <div class="main-tabs ">
        <ul class="navbar-nav navbar-collapse mr-auto collapse multi-collapse">
          <li class="nav-item">
            <a href="home.php" id="homeLink" class="nav-link active"> Home </a>
          </li>

          <li class="nav-item">
            <a href="home.php" class="nav-link "> About Us </a>
          </li>

          <li class="nav-item">
            <a href="home.php" class="nav-link "> Services </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Others</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#tab2Id">Action</a>
              <a class="dropdown-item" href="#tab3Id">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#tab4Id">Action</a>
            </div>
        </ul>
      </div>
      <!-- here is the class for login and register -->
      <div class="login-register ml-auto ">
        <ul class="navbar-nav  navbar-collapse collapse multi-collapse">
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#registrationModal" data-toggle="modal"
              data-target="#registrationModal">Register</a>
          </li>
        </ul>
      </div>


    </nav>
  </header>

  <!-- We are going to add a couresel in this section -->
  <section>
    <div class="slider-area ">
      <div id="carouselExampleControls" class="carousel slide slider mx-auto " data-ride="carousel"
        data-interval="1500">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="pic" src="/pictures/ines-alvarez-fdez-6pfy-HGWgPU-unsplash.jpg" alt="First slide">
          </div>
          <div class="carousel-item ">
            <img class="pic" src="pictures/markus-spiske-NPr6oUGMWus-unsplash.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="pic" src="/pictures/nikhil-mitra-JqwzIdvAKCg-unsplash.jpg" alt="Third slide">
          </div>
        </div>
        <!-- data control -->
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

  <div class="devider">
    <hr />
  </div>

  <div class="content-area container p-0">
    <div class="card-deck">
      <div class="card col-4 mr-1">
        <img class="card-img-top rounded-circle mx-auto profile-pic"
          src="pictures/cesar-rincon-XHVpWcr5grQ-unsplash.jpg" />
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>
          <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
        </div>
      </div>

      <!-- second card -->
      <div class="card col-4 mx-1">
        <img class="card-img-top rounded-circle mx-auto profile-pic"
          src="pictures/cesar-rincon-XHVpWcr5grQ-unsplash.jpg" />
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>
          <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
        </div>
      </div>

      <!-- Third card -->
      <div class="card col-4 ml-1">
        <img class="card-img-top rounded-circle mx-auto profile-pic"
          src="pictures/cesar-rincon-XHVpWcr5grQ-unsplash.jpg" />
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>
          <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
        </div>
      </div>
    </div>
  </div>

  <div class="devider">
    <hr />
  </div>
  <!-- pic and text area -->
  <section>
    <div class="other-content container">
      <div class="bg-success p-2 holder-of-all">
        <div class="holder-of-text-and-pic d-flex ">
          <!-- text contents -->
          <div class="text-contents mr-auto ">
            <div class="card mr-4">
              <div class="card-body">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda corporis repellendus id nihil et voluptate officia a
                  repellat natus quia ea ratione quo atque
                  eligendi soluta, perferendis, pariatur perspiciatis rem.
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis blanditiis delectus, facilis voluptate
                  beatae expedita
                  quaerat perspiciatis nam repudiandae eos illo nulla, pariatur aliquam nesciunt dolor minima dicta quos
                  quia!
                </p>
              </div>
            </div>
          </div>

          <!-- image -->
          <div class="image-content w-8 ml-auto">
            <img src="pictures/cesar-rincon-XHVpWcr5grQ-unsplash.jpg" class="d-block rounded " style="height: 300px;" />
          </div>
        </div>
        <div class="button-area d-flex">
          <div class="btn btn-danger rounded mx-auto"> More </div>
        </div>
      </div>
    </div>

  </section>
  <!-- devider -->
  <div class="devider">
    <hr />
  </div>

  <!-- Footer Area -->
  <footer class="page-footer font-small  pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-mb-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">Footer Content</h5>
          <p>Here you can use rows and columns to organize your footer content.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

          <!-- Links -->
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">C#</a>
            </li>
            <li>
              <a href="#!">JAVA</a>
            </li>
            <li>
              <a href="#!">PYTHON</a>
            </li>
            <li>
              <a href="#!">ANGULAR</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

          <!-- Links -->
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Home</a>
            </li>
            <li>
              <a href="#!">About Us</a>
            </li>
            <li>
              <a href="#!">Services</a>
            </li>
            <li>
              <a href="#!">Demo</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="/"> SheikhSayed.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  <!-- Here is Registration Modal -->
  <div id="registrationModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title mx-auto">Registration Form</h4>
        </div>
        <div class="modal-body">
          <!-- input the form here -->
          <form>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control col-md-6" placeholder="Enter email as userName" id="email">
            </div>
            <div class="form-group">
              <label for="name">Name :</label>
              <input type="input" class="form-control col-md-6" placeholder="Enter Name" id="name">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control col-md-6" placeholder="Enter password" id="pwd">
            </div>
            <!-- show the error here from server side -->
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="formSubmit">Submit</button>
          <button type="button" class="btn btn-danger" id="registrationModalClose" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <script src="js\form_validator.js"></script>
</body>
