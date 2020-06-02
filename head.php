<header>
  <?php
  $mysql = new mysqli('localhost','id13682932_hh','123123123-Asd','id13682932_hbd');
  $Userlogin = $_COOKIE['userL'];
  $lookupID = "SELECT Role FROM User WHERE Login = '$Userlogin'";
  $result = mysqli_query($mysql, $lookupID);
  $row = mysqli_fetch_row($result);
  $UserRole = $row[0];
  $mysql->close();
   ?>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<a class="navbar-brand" href="#">Healthy Heart</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <?php
      if ($UserRole == 0){
    echo'  <a class="nav-link" href="testForm.php">Test</a>';
  }
      ?>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="aboutUs.php">About Us</a>
    </li>
  </ul>

  <li class="nav-item">
    <?php


      if(isset($_COOKIE['userL'])) {

        if ( $UserRole == 0) {
          echo '<a class="btn btn-outline-success my-2 my-sm-0" href="Prof.php">'. $_COOKIE['userL'] .'</a>';
          echo '<a class="btn btn-outline-success my-2 my-sm-0" href="index.php?logout=1" style="margin-left:20px;">Log out</a>';
        }
        else if ($UserRole == 1) {
          echo '<a class="btn btn-outline-success my-2 my-sm-0" href="DCalendar.php">'. $_COOKIE['userL'] .'</a>';
          echo '<a class="btn btn-outline-success my-2 my-sm-0" href="index.php?logout=1" style="margin-left:20px;">Log out</a>';
        }
        else if ($UserRole == 2) {
          echo '<a class="btn btn-outline-success my-2 my-sm-0" href="AdminProfile.php">'. $_COOKIE['userL'] .'</a>';
          echo '<a class="btn btn-outline-success my-2 my-sm-0" href="index.php?logout=1" style="margin-left:20px;">Log out</a>';
        }
      } else {
        echo '<a class="btn btn-outline-success my-2 my-sm-0" href="loginF.php">Login/Registration</a>';
      }
    ?>
  </li>



</div>
</nav>
</header>
<hr class="featurette-divider">
