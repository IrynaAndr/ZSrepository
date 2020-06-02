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
    <style>
    div.all {
    width:750px;
     text-align: justify;
     margin: auto;
    }

/* On screens that are 992px wide or less, the background color is blue */
@media screen and (max-width: 1000px) {
  div.all {
    width:75%;
     text-align: justify;
     margin: auto;
  }
}
div.a {
  text-align: center;
}

div.b {
  text-align: left;

}

div.c {
  text-align: right;
}


.laravel-icon {
    background:url(https://i.dlpng.com/static/png/6348823_preview.png) no-repeat left center;
    background-size: 35px;
    display:inline-block;
    padding-left: 40px;
}
#wrapper {
  display: flex;
}

#left {
  flex: 0 0 45%;
}

#right {
  flex: 1;
}
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
  }
    </style>
    <h1 style="text-align:center; font-size:36px">Quick solution</h1>
<img src="https://haivisio.eu/wp-content/uploads/2013/11/slider_1.jpg" alt="intro" style="width:60%; display: block;
  margin-left: auto;
  margin-right: auto;">
  </br>
    <div class="all">
    <div id="wrapper">
  <div id="left" style="padding:20px; ">
   <h2 style="color:#c43f35; text-align:center;" > Our story</h2>
   <p>The Healthy Heart Medical Network has been successfully operating since 2020. Our clients recieve services in full (online consultations, appointments with a ddoctor, multiple test, all kinds of bonuses) in Kharkov. We plan to expand our range of servecies throughout Ukraine and beyond</p>
  </div>
  <div id="right" style="padding:20px; ">
   <h2 style="color:#c43f35; text-align:center;" > Our responsibility</h2>
   <p>The Healthy Heart Medical Network takes care of patients every day and is personally responsible for each employee. Caring for the health and comfort of people who have entrusted us with their health is the main task set by the team Healthy Heart Meical Network</p>
  </div>
</div>
<img src="sc/aboutuscollage.png" alt="intro" style="width:75%; display: block;
  margin-left: auto;
  margin-right: auto;">
  </br>
    <div class="a">
    <h1 class="laravel-icon" href="#"> Q&A</h1>

    </div>

    <div class="b">
    <h2 style="color:#c43f35;" > Is it for free?</h2>
    <p> Passing the test is reuseble and the first online consultation is absolutly free for authorized users.</p>
    </br>
    </div>

    <div class="c">
    <h2 style="color:#c43f35;">How accurate is test?</h2>
    <p>We do not guarantee a 100% test results, however, when indicating reliable information, the development team tried to bring the test result as close as possible to reality.</p>
    </br>
    </div>

    <div class="b">
    <h2 style="color:#c43f35;">Are your doctors qualified?</h2>
    <p>Naturally, our doctors are some of the best and most qualified in this fieldd and in the market of medical services.</p>
    </br>
    </div>
    </div>
  </body>

  <footer>
    <?php require 'foot.php'; ?>
  </footer>

</html>
