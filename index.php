<?php 
$title = "Tara";
$link = "home";
include 'inc/header.php'; 


?>

<body>
 <?php include 'inc/navbar.php'; ?>
 
 <!-- Full Page Intro -->
  <div class="view" style="background-image: url('img/home_bg.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="text-center white-text mx-5 wow fadeIn">
        <h1 class="mb-4">
          <strong>Nya Ngay?</strong>
        </h1>

        <p>
          <strong>Meet Tayo? Tara!</strong>
        </p>

        <p class="mb-4 d-none d-md-block">
          <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written
            versions available.
            Create your own, stunning website.</strong>
        </p>

        <a href="#" class="btn btn-outline-white btn-lg">Get Started
          <i class="fas fa-handshake ml-2"></i>
        </a>
      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->


<?php include 'inc/footer.php'; ?>
<?php include 'inc/scripts.php'; ?>
</body>

</html>