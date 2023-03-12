<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>careers</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="index2.php">Luca’s Loaves</a></h1>
      

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index2.php">Home</a></li>
          <li><a href="about us.php">About</a></li>
          <li><a class="active" href="careers.php">careers</a></li>
          <li><a href="orderonline.php">order online</a></li>
          <li><a href="VIP.php">VIP</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= careers Section ======= -->
    <section id="careers" class="careers">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>careers</h2>
          <p>Join our team
            We are expanding our branches and need experienced baker regularly. Send us your detail with the form below
            and we will be in contact shortly</p>
        </div>

        <div id="three-column" class="container">
           
          <div class="title">
              <h2>Fill out the form below and upload your cover letter and careers</h2>
              <form action="file_upload.php" method="POST"enctype="multipart/form-data">
    
               <div class="shuru">
              <label for="name" class="color1">First name:</label>
              <input type="text" id="name" name="name"/><br>
              <label for="email" class="color1">Last name:</label>
              <input type="text" id="email"name="email" /><br>
              <label for="telephone" class="color1">Email Address:</label>
              <input type="text" id="telephone" name="telephone"/><br>
              <label for="message" class="color1">Work experience:</label>
              <input name="message" id="message" cols="30" rows="10"></br>
      <h4  class="color1">Select files to upload:</h4>
                  <br></br>
                   
                  <!-- name of the input fields are going to
                      be used in our php script-->
                  <input type="file" name="files[]" multiple class="color1"><br>
                  <input type="file" name="files[]" multiple class="color1">
                  <br><br>
                   
                  <input type="submit" name="submit" value="Upload" class="color1">
              </p>
       
          </form>
          
          </div>
          <footer id="footer">
            <div class="container">
              <div class="copyright">
                &copy; Copyright <strong><span>Luca’s Loaves</span></strong>. All Rights Reserved
              </div>
              <div class="credits">
                
                Designed by <a href="https://bootstrapmade.com/">Max</a>
              </div>
            </div>
          </footer><!-- End  Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>