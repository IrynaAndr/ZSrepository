<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" content="width=device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Healthy heart</title>
  </head>
  <header>
    <?php require 'head.php'; ?>
  </header>

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


<body>
<main role="main">

    <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://i.ibb.co/BZW83DX/photo-2020-05-30-20-15-41.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://i.ibb.co/mTXj73m/photo-2020-05-30-20-12-59-2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://i.ibb.co/2kCGm16/photo-2020-05-30-20-12-59.jpg" style="width:100%">
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

    <div class="row featurette" style="width: 1500px">
      <div class="col-md-7" style="margin-left: 50px; margin-top: 100px;">
        <i><h2 class="featurette-heading">Affordable medical care for everyone</h2></i>
        <p class="lead">You have the opportunity to take the test an unlimited number of times for free!<br/>
        Only here you can also get an online consultation for free!</p>
        <span class="text-muted" style="font-size: 20px; margin-left: 40px;"><i>"Treat the patient as you would like to be treated at the time of illness. First of all, do no harm."</i><br/>
        <i style="margin-left: 700px">Hippocrates</i></span>


      </div>

      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></svg>
        <img src = "img/врач1.jpg" alt = "" style= "width:500px; height:300px; margin-top: -400px;">
        <div class="overlay2" style = "width: 500px">Our doctors: Vera Pavlovna and Ivan Petrovich</div>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette" style="width: 1500px">
      <div class="col-md-7 order-md-2" style = "margin-left: 150px; margin-top: 100px;">
        <i><h2 class="featurette-heading">Qualified doctors</h2></i>
        <p class="lead">Only we provide the services of highly qualified and experienced doctors who will put you the correct diagnosis and will gladly help you overcome your illness!</p>
        <span class="text-muted" style="font-size: 20px; margin-left: 200px;"><i>"A physician should be a prudent man, beautiful, kind and humane."</i><br/>
        <i style="margin-left: 700px">Hippocrates</i></span>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></svg>
            <img src = "img/врач2.jpg" alt = "" style= "width:500px; height:300px; margin-top: -370px; margin-left: 30px">
         <div class="overlay2" style="width:500px; margin-left: 30px">Our doctors: Ihor Victorovich and Anna Pavlovna</div>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette" style="width: 1500px">
      <div class="col-md-7" style="margin-left: 50px; margin-top: 100px">
        <i><h2 class="featurette-heading">Reliable test</h2></i>
        <p class="lead">The test was developed by some of the best experts in this field, which is why you can trust the results! But remember that the answers must be truthful! Only when your answers reflect the truth, test results are correct! </p>
        <span class="text-muted" style="font-size: 20px; margin-left: 150px;"><i>"Not only the doctor himself should use everything necessary, but the patient, and others, and all external circumstances should help the doctor in his work."</i><br/>
        <i style="margin-left: 700px">Hippocrates</i></span>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></svg>
        <img src = "img/врач3.jpg" alt = "" style= "width:500px; height:300px; margin-top: -370px; ">
         <div class="overlay2" style="width:500px">Our doctor Vira Olehivna</div>
      </div>
    </div>
    <hr class="featurette-divider">
 <div style="background: #cde4f7; padding-left: 40px ">
        </br>
    <h2  style="text-align:center; padding-right: 30%"> Patient's reviews :</h2>
    <h4  style="text-align:center; padding-right: 30%"> Last 3:</h4>
    <br>
    
    
        <?php
      $mysql = new mysqli('localhost','id13682932_hh','123123123-Asd','id13682932_hbd');
      $sql = "SELECT * FROM Feedback ORDER BY Id_feedback DESC LIMIT 3;";
      
      
      $result = $mysql->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
        
        
        while($row = $result->fetch_assoc() ) {
            $idpat= $row["Id_patient"];
            $sql2 = "SELECT Name, Surname From Patient WHERE Id_patient='$idpat'";
            $res2= $mysql->query($sql2);
             while($row2 = $res2->fetch_assoc()) {
                 
                 if($row["Mark"]==5){
                     
                     echo '
                     <div id="wrapper">
  <div id="left" style="padding:20px; ">
   <h4 style="color:#312a80; text-align:left; " >'; echo  $row2["Surname"]." ".  $row2["Name"] ; echo' :</h4>
  <p id="rcorners1">'; echo $row["Feedback"]; echo'</p>
  </div>
  <div id="right" style="padding:20px; margin-top: -60px; margin-left:-500px ">
    <p class="crop"><a href="#" title="">  <img src="https://www.harpendencleaning.co.uk/wp-content/uploads/2018/04/5-star-rating.png" style="margin:-200px -20px -200px -40px;" alt="" /></a></p></p>
  </div>
  
</div>
                     ';
                 }
                 else if($row["Mark"]==4){
                     
                      echo '
                     <div id="wrapper">
  <div id="left" style="padding:20px; ">
   <h4 style="color:#312a80; text-align:left; " >'; echo  $row2["Surname"]." ".  $row2["Name"] ; echo' :</h4>
  <p id="rcorners1">'; echo $row["Feedback"]; echo'</p>
  </div>
  <div id="right" style="padding:20px; margin-top: -60px; margin-left:-430px ">
    <p class="crop"><a href="#" title="">  <img src="https://www.harpendencleaning.co.uk/wp-content/uploads/2018/04/5-star-rating.png" style="margin:-200px -190px -200px -40px;" alt="" /></a></p></p>
  </div>
  
</div>
                     ';   
                 }
                     else if($row["Mark"]==3){
                        
                      echo '
                     <div id="wrapper">
  <div id="left" style="padding:20px; ">
   <h4 style="color:#312a80; text-align:left; " >'; echo  $row2["Surname"]." ".  $row2["Name"] ; echo' :</h4>
  <p id="rcorners1">'; echo $row["Feedback"]; echo'</p>
  </div>
  <div id="right" style="padding:20px; margin-top: -60px; margin-left:-377px ">
    <p class="crop"><a href="#" title="">  <img src="https://www.harpendencleaning.co.uk/wp-content/uploads/2018/04/5-star-rating.png" style="margin:-200px -333px -200px -40px;" alt="" /></a></p></p>
  </div>
  
</div>
                     ';   
                 }
                 else if($row["Mark"]==2){
                     
                      echo '
                     <div id="wrapper">
  <div id="left" style="padding:20px; ">
   <h4 style="color:#312a80; text-align:left; " >'; echo  $row2["Surname"]." ".  $row2["Name"] ; echo' :</h4>
  <p id="rcorners1">'; echo $row["Feedback"]; echo'</p>
  </div>
  <div id="right" style="padding:20px; margin-top: -60px; margin-left:-325px ">
    <p class="crop"><a href="#" title="">  <img src="https://www.harpendencleaning.co.uk/wp-content/uploads/2018/04/5-star-rating.png" style="margin:-200px -475px -200px -40px;" alt="" /></a></p></p>
  </div>
  
</div>
                     ';   
                 }
                 else {
                     
              echo '
                     <div id="wrapper">
  <div id="left" style="padding:20px; ">
   <h4 style="color:#312a80; text-align:left; " >'; echo  $row2["Surname"]." ".  $row2["Name"] ; echo' :</h4>
  <p id="rcorners1">'; echo $row["Feedback"]; echo'</p>
  </div>
  <div id="right" style="padding:20px; margin-top: -60px; margin-left:-262px ">
    <p class="crop"><a href="#" title="">  <img src="https://www.harpendencleaning.co.uk/wp-content/uploads/2018/04/5-star-rating.png" style="margin:-200px -620px -200px -40px;" alt="" /></a></p></p>
  </div>
  
</div>
                     ';  
                 }
        }}
      }
      
      $mysql->close();
      ?>
    <p style="width=100%; text-align:center;"><a href="https://tridimensional-laun.000webhostapp.com/CommTest.php" class="button">See more</a> </p>
    </br>
    </div>
    <div style="background: #71b9f5; margin:auto;padding:10px; padding-left:25%">
      <?php
      error_reporting(0);
      if( $_COOKIE['userL'] != null || $_COOKIE['userL'] != "" ){
        echo'
      <div class="Add" style="width:80%; margin:auto;">
     <h2 > Leave Feedback:</h2>
     <form action="sc/submitcomm.php" method="post">
       <p>Rating (from 1 to 5):</p>
       <input type="range" id="Mark" name="Mark" min="0" max="5">
       <p>Comment:</p>
       <input type="text" name="Feedback" style="width: 500px;height:80px;">
     </br>
     </br>
       <input type="submit" value="submit" >
     </form>

    </div>
    ';
    }
    else{
      echo'<div style="margin:auto; width: 100%; padding: 10px; padding-left: 25%">
    <p><h5>Please log in to left a Feedback 
    <a href="https://tridimensional-laun.000webhostapp.com/loginF.php" class="button">Log in</a></h5></p>
      </div>
      ';
    }
    ?>
<style>
  #rcorners1 {
  border-radius: 15px;
  border: 1px solid #312a80;
  background: white;
  padding: 5px; 
   
}
#wrapper {
  padding-left: 15%;
  display: flex;
}

#left {
  flex: 0 0 75%;
}

#right {
  flex: 1;
}
.crop{
	float:left;
  	transform: scale(0.2, 0.2);
	
	overflow:hidden; /* this is important */
	}
	
.crop img{
        
	}
</style>
    <style>
    .button {
     border: none !important; display:inline-block !important;text-align: center !important;padding: 7px 20px !important;
        color: #fff !important; font-size:16px !important; font-weight: 600 !important; font-family:OpenSans, sans-serif; cursor: pointer !important; border-radius: 2px !important;
        background: rgb(43,119,183) !important;"onmouseover="this.style.opacity='0.5';" onmouseout="this.style.opacity='1';"
    }
    </style>

  </body>

  <footer>
    <?php require 'foot.php'; ?>
  </footer>

</html>
