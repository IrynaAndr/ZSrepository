<?php
  if(isset($_GET['logout'])){
    if($_GET['logout']==1){
      header("/index.php");
      unset($_COOKIE['auth']);
      setcookie('auth', null, -1, '/');
      unset($_COOKIE['userL']);
      setcookie('userL', null, -1, '/');
      $_GET['logout']=0;
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" content="width=device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Healthy heart</title>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }

      }
      .survey {
  align-items: center;
  align-self: center;
  align-content: center;
  text-align: center;
}
.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}
.wrapper {
    display: block;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    /* top layer */
    z-index: 9999;
}

.overlay {
    display: none;
    position: fixed;
    /* full screen */
    width: 100vw;
    height: 100vh;
    /* transparent black */
    background: rgba(0, 0, 0, 0.7);
    /* middle layer, i.e. appears below the sidebar */
    z-index: 998;
    opacity: 0;
    /* animate the transition */
    transition: all 0.5s ease-in-out;
}
/* display .overlay when it has the .active class */
.overlay.active {
    display: block;
    opacity: 1;
}

#dismiss {
    width: 35px;
    height: 35px;
    position: absolute;
    /* top right corner of the sidebar */
    top: 10px;
    right: 10px;
}

.carousel {
  margin-bottom: 4rem;
}

.col-md-5{
  position: relative;
  width: 50%;
  max-width: 400px;
}

.col-md-5 order-md-1{
  position: relative;
  width: 50%;
  max-width: 400px;
}

.bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto{
  display: block;
  width: 100%;
  height: auto;
}

.overlay2 {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1;
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.col-md-5:hover .overlay2 {
  opacity: 1;
}

.col-md-5 order-md-1:hover .overlay2 {
  opacity: 1;
}

.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

    </style>
  </head>

  <header>
    <?php require 'head.php'; ?>
  </header>
<body>
<main role="main">

    <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://i.ibb.co/nn0W1NN/1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://i.ibb.co/tqy095x/2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://eskipaper.com/images/minimalist-wallpaper-30.jpg" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>
</main>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7" style="margin-left: 50px; margin-top: 130px;">
        <i><h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2></i>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>

      </div>

      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></svg>
        <img src = "img/врач1.jpg" alt = "" style= "width:500px; height:300px; margin-top: -400px;">
        <div class="overlay2" style = "width: 500px">Need to place some text</div>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2" style = "margin-left: 150px; margin-top: 130px;">
        <i><h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2></i>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></svg>
            <img src = "img/врач2.jpg" alt = "" style= "width:500px; height:300px; margin-top: -370px; margin-left: 30px">
         <div class="overlay2" style="width:500px; margin-left: 30px">Need to place some text</div>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7" style="margin-left: 50px; margin-top: 150px">
        <i><h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2></i>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></svg>
        <img src = "img/врач3.jpg" alt = "" style= "width:500px; height:300px; margin-top: -370px; ">
         <div class="overlay2" style="width:500px">Need to place some text</div>
      </div>
    </div>
    <hr class="featurette-divider">
    <div style="background: #7386D5; height: 300px;">
      <p>
        There will be other commnets

      </p>
      <?php
      $mysql = new mysqli('localhost','id13682932_hh','123123123-Asd','id13682932_hbd');
      $sql = "SELECT * FROM Feedback";
      $result = $mysql->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "Id_patient : " . $row["Id_patient"]. " - Mark : " . $row["Mark"]. " " . $row["Feedback"]. "<br>";
        }
      }
      ?>

    </div>
    <div style="background: #c2d9ff; height: 300px;">
      <?php
      error_reporting(0);
      if( $_COOKIE['userL'] != null || $_COOKIE['userL'] != "" ){
        echo'
      <div class="Add" style="width:80%; margin:auto;">
     <h2 > Leave Feedback:</h2>
     <form action="sc/submitcomm.php" method="post">
       <p>Rating:</p>
       <input type="range" id="Mark" name="Mark" min="0" max="5">
       <p>Feedback:</p>
       <input type="text" name="Feedback" style="width: 500px">
     </br>
       <input type="submit" value="submit" >
     </form>

    </div>
    ';
    }
    else{
      echo'<div style="margin:auto; width: 80%">
    Please log in to left a Feedback
    <a href="https://tridimensional-laun.000webhostapp.com/loginF.php" class="button">Log in</a>
      </div>
      ';
    }
    ?>

    <style>
    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 10px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
    </style>
    </div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1600);
}
</script>
  </body>

  <footer>
    <?php require 'foot.php'; ?>
  </footer>

</html>
