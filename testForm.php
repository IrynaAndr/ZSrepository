<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" content="width=device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Healthy heart | Test</title>
  </head>

  <header>
    <?php require 'head.php'; ?>
  </header>

  <body>
    <div class="survey">

      <form class="" action="sc/testSc.php" method="post">
        <p>1. What is your gender?</p>
        <p>
          <input type="radio" name="gender" value="male">Male
          <input type="radio" name="gender" value="female">Female
        </p>
        <p>2. Enter your age</p>
        <p>
          <input type="number" name="Age" value="18">
        </p>
        <p>3. Rate how much your chest pains bother you</p>
        <p>
          <input type="radio" name="3" value="0">Do not bother
          <input type="radio" name="3" value="1">Mild pain
          <input type="radio" name="3" value="2">Moderate pain
          <input type="radio" name="3" value="3">Severe pain
        </p>
        <p>4. How often do you have headaches?</p>
        <p>
          <input type="radio" name="4" value="0">Do not bother
          <input type="radio" name="4" value="1">Rarely
          <input type="radio" name="4" value="2">Sometimes
          <input type="radio" name="4" value="3">Often
        </p>
        <p>5. If headaches bother you, are they accompanied by nausea?</p>
        <p>
          <input type="radio" name="5" value="0">Do not bother
          <input type="radio" name="5" value="1">Bother, but without nausea
          <input type="radio" name="5" value="2">Bother and are accompanied by nausea
        </p>
        <p>6. If headaches bother you, are they accompanied by nausea?</p>
        <p>
          <input type="radio" name="6" value="0">Do not bother
          <input type="radio" name="6" value="1">Bother, but without nausea
          <input type="radio" name="6" value="2">Bother and are accompanied by nausea
          <input type="radio" name="6" value="3">Often
        </p>
        <p>7. Is your weight adequate?</p>
        <p>
          <p>
            <img src="https://avatars.mds.yandex.net/get-zen_doc/142473/pub_5d23704a31878200adb4e66f_5d2371a14e057700adc67ec6/scale_1200" alt="">
          </p>
          <input type="radio" name="7" value="0">More than the norm
          <input type="radio" name="7" value="1">Less than the norm
          <input type="radio" name="7" value="2">Corresponds to the norm
        </p>
        <p>8. Indicate the maximum value of heart rate (after physical exertion)</p>
        <p>
          <input type="radio" name="8" value="0">30-40
          <input type="radio" name="8" value="1">50-60
          <input type="radio" name="8" value="2">70-80
          <input type="radio" name="8" value="3">90-100
        </p>
        <p>9. Are you experiencing chest pain along with shortness of breath after exercise?</p>
        <p>
          <p><input type="radio" name="9" value="0">Yes</p>
          <p><input type="radio" name="9" value="1">No</p>
        </p>
        <p>10. Do you have swelling?</p>
        <p>
          <input type="radio" name="10" value="0">No edema
          <input type="radio" name="10" value="1">Few
          <input type="radio" name="10" value="2">Moderately
          <input type="radio" name="10" value="3">A lot
        </p>
        <p>11. Are there any patients with cardiovascular disease among your relatives?</p>
        <p>
          <p><input type="radio" name="11" value="0">Yes</p>
          <p><input type="radio" name="11" value="1">No</p>
        </p>

        <p>
          <button class="btn btn-outline-primary" type="submit" name="submitButton">Show results</button>
        </p>
      </form>

    </div>
  </body>

  <footer>
    <?php require 'foot.php'; ?>
  </footer>

</html>
