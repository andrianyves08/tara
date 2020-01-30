<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    <?php 
    if(isset($title) && !empty($title)) { 
       echo $title; 
    } 
    else { 
       echo "Default title tag"; 
    } ?>
  </title>
  <!-- Font Awesome -->
<!--   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> -->
  <!-- Font Awesome Offline-->
  <script defer src="js/all.js"></script>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <!-- Toastr css -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">

  <link rel="stylesheet" href="bower_components/bootstrap-datetimepicker.css" />
  <link rel="stylesheet" href="bower_components/bootstrap-datetimepicker.min.css" />
  <link rel="stylesheet" href="bower_components/bootstrap-datetimepicker-standalone.css" />
  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }

    * {
    margin: 0;
    padding: 0;
    }
    html,
    body {
    height: 100%;
    width: 100%;
    }
    main {
    min-height: 100%;
    }
    #container {
    overflow: auto;
    }
    header {
    width: 100%;
    }
    footer {
    position: relative;
    clear: both;
    width: 100%;
    }

  </style>