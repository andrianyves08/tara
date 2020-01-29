   <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="index.php"/>
        <strong>Tara</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php if($link == 'home') {echo 'active';} ?>">
            <a class="nav-link" href="index.php">Home
              <?php if($link == 'home') {echo '<span class="sr-only">(current)</span>';} ?>
            </a>
          </li>
          <li class="nav-item <?php if($link == 'guide') {echo 'active';} ?>">
            <a class="nav-link" href="guide.php">Hangout Guide
              <?php if($link == 'guide') {echo '<span class="sr-only">(current)</span>';} ?>
            </a>
          </li>
          <li class="nav-item <?php if($link == 'faq') {echo 'active';} ?>">
            <a class="nav-link" href="faq.php">Faq/Guide
              <?php if($link == 'faq') {echo '<span class="sr-only">(current)</span>';} ?>
            </a>
          </li>
        </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">

            <li class="nav-item">
              <a class="nav-link waves-effect" data-toggle="modal" data-target="#signup">Signup
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" data-toggle="modal" data-target="#login">Login
              </a>
            </li>
          </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->