<!DOCTYPE html>
<html>
<head>
  <title>testForm</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script src="js/ajax.js"></script>
</head>
<body>
  <form name="regForm" action="validation.php" method="post" id="regForm">
    <div class="inpFields">
      <label for="firstName"> First Name 
        <input class="inpText" type="text" id="firstName" name="firstName" placeholder="Vasya" required>
      </label>
    </div>
    <div class="inpFields">
      <label for="lastName"> Last Name 
        <input class="inpText" type="text" name="lastName" placeholder="Pupkin" required>
      </label>
    </div>
    <div class="inpFields">
      <label for="email"> E-mail 
        <input class="inpText" type="email" name="email" placeholder="example@ex.com" required>
      </label>
    </div>
    <div class="inpFields">
      <label for="phone"> Phone number
        <input class="inpText" type="tel" name="phone" placeholder="+380*******" required>
      </label>
    </div>
    <div class="submit">
      <input type="submit" name="submit" value="Submit">
    </div>
  </form>
</body>
</html>