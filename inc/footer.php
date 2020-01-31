<!-- Sign Up -->
  <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign Up</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <!--Body-->
        <div class="modal-body mx-3">
            <form class="form-contact contact_form" action="./functions/register.php" method="post">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <input required class="form-control" name="username" id="username" type="text" placeholder="Username">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <input required class="form-control" name="email" type="text" placeholder="Enter Email">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <input required class="form-control" name="password" type="password" placeholder="Enter password">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <input required class="form-control" name="confirmpassword" type="password" placeholder="Confirm password">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input required class="form-control" name="firstname" type="text" placeholder="Enter Firstname">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input required class="form-control" name="lastname" type="text" placeholder="Enter Lastname">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input required class="form-control" name="address" type="text" placeholder="Enter Address">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input required class="form-control" name="dob" type="date" placeholder="Enter birthday">
                  </div>
                </div>
              </div>
        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <button class="btn btn-default">Register</button>
        </div>
        </form>
      </div>
      <!--/.Content-->
    </div>
  </div>

  <!-- Login -->
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <!--Body-->
        <div class="modal-bod mx-3">
            <form action="./functions/saveme.php" method="POST" class="p-2">
            <input type="text" id="loginusername" name="username" placeholder="Enter Username" class="form-control mb-4" placeholder="ID Number">

            <input type="password" id="loginpassword" name="password" class="form-control mb-4" placeholder="Password">

        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <button class="btn btn-default">Login</button>
        </div>
        </form>
      </div>
      <!--/.Content-->
    </div>
  </div>

   <!--Footer-->
  <footer class="page-footer font-small wow fadeIn">
    <br>

    <!-- Social icons -->
    <div class="pb-4 text-center">
      <a href="https://www.facebook.com/intelektsolutions" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/MDBootstrap" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="https://dribbble.com/mdbootstrap" target="_blank">
        <i class="fab fa-instagram mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      <div class="row mx-md-n2">
        <div class="col-md-3 col-lg-8">
          © 2020 Copyright:
          <a href="https://www.intelektbusiness.com" > intelektbusiness.com </a>
        </div>

        <div class="col-md-9 col-lg-4">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a href="#">
                About Us
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                Contact us
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                Terms and Conditions
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                Privacy Policy
              </a>
            </li>
          </ul>
        </div>

      </div>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->