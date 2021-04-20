<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lecturer Account</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../home/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../home/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../home/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../home/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../home/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../home/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../home/assets/css/style.css" rel="stylesheet">

</head>

<body>

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

  

    <a href="../hod/logout.php" class="get-started-btn">Logout</a>

  </div>
</header><!-- End Header -->

  <main id="main">

  

    <!-- ======= Details Section ======= -->
    <section id="contact" class="contact">
           
      <div class="container" data-aos="fade-up">
        <div class="address">
          <div class="address">
            <i class="icofont-google-map"></i>
            <h4></h4>
            <p></p>
          </div>
        </div>
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-user"></i>
                <h4>My Profile:</h4>
                <?php 
                include_once 'display.php';
                echo "<p>Name: {$name} <br>
                Title: {$title} <br>
                Email: {$email} <br>
                Phone: {$phone}
              </p>";
                ?>
                
              </div>
              <div class="email">
                <i class="icofont-book"></i>
                <h4>Specialization:</h4>
                <?php 
                 include_once 'display.php';
                echo "<p>Area: {$area} <br>
                </p>";
                ?>
                
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

                    <table class="table table-striped">
          <thead>
            <tr class="warning">
              <th>Unit Code</th>
              <th>Day</th>
              <th>From</th>
              <th>To</th>
              <th>Venue</th>
            </tr>
          </thead>
          <tbody>
          <?php
            include_once 'display.php';
            if(!empty($schedule)){
              foreach($schedule as $sch) {
                  echo "
                  <tr>
                  <td>{$sch['unit']} </td>
                  <td>{$sch['day']} </td>
                  <td>{$sch['start']}</td>
                  <td>{$sch['end']}</td>
                  <td>{$sch['venue']}</td>
               </tr>
                  ";
                 }
            }
            else{
            echo "No Schedule Exist!";
            }

            ?>
          </tbody>
        </table>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Meru</h3>
            <p>
              P.O Box ,972-60200 <br>
              Meru , Kenya<br>
              <br>
              <strong>Phone:</strong> +254 712524293<br>
              <strong>Email:</strong> info@must.ac.ke<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Students</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Lecturers</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Courses</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Bachelor of Computer Science</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Bachelor of Information Technology</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Bachelor of Mathematics</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Bachelor Civil Engieering</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Bachelor of Commerce</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Meru</span></strong>. All Rights Reserved
        </div>
        
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../home/assets/vendor/jquery/jquery.min.js"></script>
  <script src="../home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../home/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../home/assets/vendor/php-email-form/validate.js"></script>
  <script src="../home/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../home/assets/vendor/counterup/counterup.min.js"></script>
  <script src="../home/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../home/assets/vendor/aos/aos.js"></script>

  <!-- Main JS File -->
  <script src="../home/assets/js/main.js"></script>

</body>

</html>