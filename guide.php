<?php 
$title = "Hangout Guide";
$link = "guide";
include 'inc/header.php'; 

?>

<body>
 <?php include 'inc/navbar.php'; ?>
 
 <!--Main layout-->
  <main class="mt-5 pt-5">

    <div class="container mt-2">

<section class="text-center">

        <!--Grid row-->
        <div class="row mb-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

          <!--Grid column-->
          <div class="col-md-4 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <div class="embed-responsive embed-responsive-16by9 rounded-top">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cXTThxoywNQ" allowfullscreen=""></iframe>
                </div>
              </div>

              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title">MDB Quick Start</h4>
                <!--Text-->
                <p class="card-text">Get started with MDBootstrap, the world's most popular Material Design framework
                  for building
                  responsive, mobile-first sites.</p>
                <p class="card-text">
                  <strong>5 minutes, a few clicks and... done. You will be surprised at how easy it is.</strong>
                </p>
              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-8 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="https://mdbootstrap.com/wp-content/uploads/2017/11/brandflow-tutorial-fb.jpg" class="card-img-top" alt="">
                <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                  <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title">Bootstrap Automation</h4>
                <!--Text-->
                <p class="card-text">Learn how to create a smart website which learns your user and reacts properly to
                  his behavior.</p>
                <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank" class="btn btn-primary btn-md waves-effect waves-light">Start tutorial
                  <i class="fas fa-play ml-2"></i>
                </a>
              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
   
    </div>
  </main>
  <!--/. main-->

<?php include 'inc/footer.php'; ?>
<?php include 'inc/scripts.php'; ?>
</body>

</html>