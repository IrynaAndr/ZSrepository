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

  <body>
  <main role="main">

      <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner">
      <div class="item active">
        <img src="https://i.ibb.co/nn0W1NN/1.jpg" alt="img1" style="width:100%;">
      </div>

      <div class="item">
        <img src="https://i.ibb.co/r5kdPwr/3.jpg" alt="img2" style="width:100%;">
      </div>

      <div class="item">
        <img src="https://i.ibb.co/tqy095x/2.jpg" alt="img3" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>


    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
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
