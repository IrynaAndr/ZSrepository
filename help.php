<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <style type="text/css">
    .wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
    }
    .wrapper {
    display: flex;
    align-items: stretch;
  }

#sidebar {
    min-width: 250px;
    max-width: 250px;
}

#sidebar.active {
    margin-left: -250px;
}

  #sidebar {
    min-width: 250px;
    max-width: 250px;
    min-height: 100vh;
  }
  a[data-toggle="collapse"] {
    position: relative;
  }

  .dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
  }
  @media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
  }
  @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


  body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
  }

  p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
  }

  a, a:hover, a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
  }

  #sidebar {
    /* don't forget to add all the previously mentioned styles here too */
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
  }

  #sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
  }

  #sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
  }

  #sidebar ul p {
    color: #fff;
    padding: 10px;
  }

  #sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
  }
  #sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
  }

  #sidebar ul li.active > a, a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
  }
  ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
  }
    </style>
</head>
  <header>
    <?php require 'head.php'; ?>
  </header>
<body>
  <div class="wrapper">
  <!-- Sidebar -->
  <nav id="sidebar">
      <div class="sidebar-header">
          <?php echo '<h3> '. $_COOKIE['userL'] .'`s profile</h3>'; ?>
      </div>

      <ul class="list-unstyled components">
          <li>
              <a href="Prof.php">Profile Settings</a>
          </li>
          <li>
              <a href="Calendar.php">My calendar</a>
          </li>
          <li class="active">
              <a href="TestRes.php">Test results</a>
          </li>
          <li>
              <a href="Cons.php">E-consultation</a>
          </li>
          <li>
              <a href="Appoint.php">Appointment</a>
          </li>
          <li>
              <a href="advice.php">Advice</a>
          </li>
          <li>
              <a href="Offers.php">Special offers</a>
          </li>
          <li>
              <a href="help.php">Help</a>
          </li>

      </ul>
  </nav>

</div>
<style>
div.a {
  text-align: center;
}

div.b {
  text-align: left;

}

div.c {
  text-align: right;
}
div.all {
width:700px;
margin-left:15px
}

.laravel-icon {
    background:url(https://www.shareicon.net/data/512x512/2016/07/29/803588_help_512x512.png) no-repeat left center;
    background-size: 35px;
    display:inline-block;

    padding-left: 40px;
}
</style>


    <div id="content" style="margin-left: 250px; margin-top: -650px">
      <div class="all">
  <div class="a">
  <h1 class="laravel-icon" href="#"> Help for new website users </h1>

  </div>

  <div class="b">

  <p> To get more detailed information about the services of the Heart Medical Center use these contact numbers:</p>
  </br>
  </div>

  <div class="b">

  <p>+38 (096) 567-12-34</p>
  <p>+38 (067) 127-16-98</p>
  </br>
  </div>

  <div class="b">

  <p>If you have any problems with the registration in your account or for some reason the test result are not displayed write to us at <b>healthyheart@gmail.com</b></p>
  <p>
    For more information check our <a  href="aboutUs.php" style="text-decoration: underline; color:blue; cursor: pointer; ">Q&A</a> section
  </p>
  <p>
    We are happy that you, dear client, used our website. Since we are not popular right now, we will try and help every customer as much as we could to get used to our interface or to solve your problems. We dream that our small site will be a small step into future where it's easier to stay healthier.  </p>
  </br>
  </div>
  </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});
    </script>

</body>



</html>
