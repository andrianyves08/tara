<?php 
$title = "Agenda";
$link = "agenda";
include 'inc/header.php'; 

?>

<body>
 <?php include 'inc/navbar.php'; ?>
 
 <!--Main layout-->
  <main class="mt-5 pt-5">

    <div class="container mt-2">

      <section class="text-center">

        <!-- Heading & Description -->
        <div class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
          <!--Section heading-->
          <h2 class="h1 text-center mb-5">Agenda</h2>
          <!--Section description-->
          <p class="text-center">MDB is world's most popular Material Design framework for building responsive,
            mobile-first websites
            and apps. </p>
          <p class="text-center mb-5 pb-5">Trusted by over
            <strong>400 000</strong> developers and designers. Easy to use &amp; customize. 400+ material UI elements,
            templates
            &amp; tutorials.</p>
        </div>
        <!-- Heading & Description -->


        <!--Grid row-->
        <div class="row mb-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

          <!--Grid column-->
          <div class="col-md-4 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title">Agendas</h4>
                  <ul class="list-group">
                    <li class="list-group-item active">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
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
                <a data-toggle="modal" data-target="#setagenda" class="btn btn-primary btn-md waves-effect waves-light">Set Agenda?
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


<!-- Sign Up -->
  <div class="modal fade" id="setagenda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Agenda</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <!--Body-->
        <div class="modal-body mx-3">
            <form class="form-contact contact_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group text-center">
                    <label>How many buddies do you want to join you?</label><br>
                    <!-- Default inline 1-->
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample">
                        <label class="custom-control-label" for="defaultInline1">Just One</label>
                      </div>

                      <!-- Default inline 2-->
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample">
                        <label class="custom-control-label" for="defaultInline2">Group</label>
                      </div>
                  </div>
                </div>
                <div class="col-sm-12">

                <div class="form-group">
                    <label>Time picker:</label>

                    <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3">
                      <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                          <div class="input-group-text input-group-addon"><i class="far fa-clock"></i></div>
                      </div>
                      
                      </div>
                    <!-- /.input group -->
                  </div>
                </div>

              </div>
        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <button class="btn btn-default">Set</button>
        </div>
        </form>
      </div>
      <!--/.Content-->
    </div>
  </div>


<?php include 'inc/footer.php'; ?>
<?php include 'inc/scripts.php'; ?>
 <script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
</body>

</html>