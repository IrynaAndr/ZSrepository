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
  .Add{
    margin-top: -50%;
    margin-left: 40%;
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
            <a href="AdminProfile.php">Admin</a>
        </li>



      </ul>
  </nav>

</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

<div id="content" style="margin-left: 250px; margin-top: -500px">
  <div class="Add">
  <h2 style="margin-left: 2%; font-weight:bold"> <img src="img/AddDoctor.png" style="width: 60px; height: 60px;"> Add doctor:</h2>
  <form action="AdminReg.php" method="post">
    <p style="margin-top: 2%">Login:</p>
    <input type="text" name="Login" style="width: 300px">
    <p style="margin-top: 2%">Password:</p>
    <input type="password" name="Password" style="width: 300px">
    <p style="margin-top: 2%">Name:</p>
    <input type="text" name="Name" style="width: 300px">
    <p style="margin-top: 2%">Surname:</p>
    <input type="text" name="Surname" style="width: 300px">
    <p style="margin-top: 2%">Qualification:</p>
    <input type="text" name="Qualification" style="width: 300px">
    <p style="margin-top: 2%">Email:</p>
    <input type="text" name="Email" style="width: 300px">
    <p style="margin-top: 2%">Link for consultation:</p>
    <input type="text" name="Link" style="width: 300px">
  </br>
    <input type="submit" value="Add doctor" style="margin-left:10%; margin-top: 2%" >
  </form>
</div>
  </div>



</body>


<</html>
