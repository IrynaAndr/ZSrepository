<header>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<a class="navbar-brand" href="#">Healthy Heart</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="testForm.php">Test</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About Us</a>
    </li>
  </ul>

  <li class="nav-item">
    <?php
      if(isset($_COOKIE['userL'])) {
        echo '<a class="btn btn-outline-success my-2 my-sm-0" href="sc/TPE.php">'. $_COOKIE['userL'] .'</a>';
      } else {
        echo '<a class="btn btn-outline-success my-2 my-sm-0" href="loginF.php">Login/Registration</a>';
      }
    ?>
  </li>
</div>
</nav>
</header>
<hr class="featurette-divider">
