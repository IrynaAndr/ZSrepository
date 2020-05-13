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
    <form class="" action="sc/reg.php" method="post">
      <label class="text-info">Login</label><br>
      <input type="text" name="Login"  class="form-control">
      <label class="text-info">Password</label><br>
      <input type="text" name="Password"  class="form-control">
      <label class="text-info">Name</label><br>
      <input type="text" name="Name"  class="form-control">
      <label class="text-info">Surname</label><br>
      <input type="text" name="Surname"  class="form-control">
      <label class="text-info">DOB</label><br>
      <input type="date" name="Date"  class="form-control">
      <label class="text-info">Address</label><br>
      <input type="text" name="Address"  class="form-control">
      <label class="text-info">Email</label><br>
      <input type="email" name="Email"  class="form-control">
      <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
    </form>
  </body>
  <footer>
    <?php require 'foot.php'; ?>
  </footer>

</html>
