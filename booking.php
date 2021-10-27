<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Al Car Rental</title>
</head>
<body>
    <!--START OF NAVIGATION BAR      START OF NAVIGATION BAR     START OF NAVIGATION BAR-->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
      <a href="index.php" class="navbar-brand">
          <img src="image/logo.png" height="60">AL Car Rental
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav">
              <a href="index.php" class="nav-item nav-link active">HOME</a>
              <a href="car.html" class="nav-item nav-link">CAR</a>
              <a href="about.html" class="nav-item nav-link">ABOUT</a>
              <a href="contact.php" class="nav-item nav-link">CONTACT</a>
          </div>
      </div>
  </nav>
      <!--END OF NAVIGATION BAR      END OF NAVIGATION BAR     END OF NAVIGATION BAR-->

      <!-- START OF BOOKING FORM    START OF BOOKING FORM    START OF BOOKING FORM-->
      <style>
      h1 {
        margin-bottom: 40px
    }
    
    label {
        color: #333
    }
    
    .btn-send {
        font-weight: 300;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        width: 80%;
        margin-left: 3px
    }
    
    .help-block.with-errors {
        color: #ff5050;
        margin-top: 5px
    }
    
    .card {
        margin-left: 10px;
        margin-right: 10px
    }
    </style>
      <div class="container"> <div class=" text-center mt-5 ">
        <h1>Al Car Rental Booking Form</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" role="form" action="send.php" method="POST" target="_blank">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Firstname *</label> <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Lastname</label> <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname"> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Email *</label> <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_num">Phone Number *</label> <input id="form_num" type="text" name="PhoneNumber" class="form-control" placeholder="Please enter your Phone Number *" required="required" data-error="Valid Phone Number is required."> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-11 mt-5">
                                        <div class="form-group"> <label for="form_car">Type of Car *</label> <select id="form_car" name="car" class="form-control" placeholder="Pick type of car" required="required" data-error="Please specify what car you need.">
                                                <option value="" selected disabled>--Select Your Car--</option>
                                                <option>Perodua Myvi 2021</option>
                                                <option>Perodua Myvi</option>
                                                <option>Perodua Axia</option>
                                                <option>Perodua Viva</option>
                                                <option>Perodua Bezza</option>
                                                <option>Proton Saga</option>
                                                <option>Perodua Alza</option>
                                                <option>Hyundai Starex</option>
                                                <option>Toyota Vellfire</option>
                                                <option>Nissan Navara</option>
                                            </select> 
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="form_P_date">Pick Up date *</label><input id="form_P_date" type="date" name="PickUpDate" class="form-control" placeholder="Pick Up Date" required="required" data-error="Please enter your pickup date"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="form_D_date">Drop Off date *</label><input id="form_D_date" type="date" name="DropOffDate" class="form-control" placeholder="Drop off Date" required="required" data-error="Please enter your dropoff date"></div>
                                    </div>
                                    <input type="hidden" name="noWa" value="+60145156050">
                                </div>
                                <div class="col-md-12"> <input type="submit" name="submit" class="btn btn-success btn-send pt-2 btn-block " value="Book"> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>

<br><br>
          <!-- START OF FOOTER    START OF FOOTER    START OF FOOTER -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>AL Car Rental
          </h6>
          <p>
          Al Car Rental provides car rentals all around West Malaysia, with over 50 cars in option. We wish to deliver comfortable and simple service to our customers, with hope to maintain great customer relationships.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Regular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Sedan</a>
          </p>
          <p>
            <a href="#!" class="text-reset">MPV</a>
          </p>
          <p>
            <a href="#!" class="text-reset">SUV</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="index.php" class="text-reset">Home</a>
          </p>
          <p>
            <a href="car.html" class="text-reset">Car Selection</a>
          </p>
          <p>
            <a href="about.html" class="text-reset">About</a>
          </p>
          <p>
            <a href="contact.php" class="text-reset">Contact</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i>Pasir Gudang, Johor</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            alhazril@yahoo.com
          </p>
          <p><i class="fas fa-phone me-3"></i>014-515 6050</p>
          <p><i class="fab fa-whatsapp me-3"></i>014-515 6050</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">alkeretasewapasirgudang.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- END OF FOOTER      END OF FOOTER    END OF FOOTER -->
</body>
</html>