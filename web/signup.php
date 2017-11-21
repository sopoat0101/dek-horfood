<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/master.css">
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <link rel="stylesheet" type="text/css" href="../css/signup.css">
  <link rel="shortcut icon" type="" href="../img/icon.png">
	<title>Dek-Horfood-Create Account</title>
</head>
<body>
  <div class="hero">
    <a href="index.php">
      <div class="photo"><img src="../img/logo.png"></div>
    </a>
  </div>
  <div class="container">
    <div id="incontainer">
      <div style="text-align: center; padding: 1%;"><h5 style="padding: 1% 2%; border-radius: 20px; background-color: rgba(255, 153, 51, 1); display: inline-block;">Register</h5></div>
    <hr>
    <form action="../php/signup_back.php" method="POST" autocomplete="off">
    <div id="login">
      <div>
        <input class="user" type="text" name="username" placeholder="Username" required>
      </div>
      <div>
        <input class="user" type="text" name="email" placeholder="E-mail" required>
      </div>
      <div>
        <input class="user" type="password" name="password" placeholder="Password" required>
      </div>
      <div>
        <input class="user" type="text" name="confirm" placeholder="Confirmpassword" required>
      </div>
      <div>
        <input class="user" type="text" name="name" placeholder="Name" required>
      </div>
      <div>
        <input class="user" type="text" name="surname" placeholder="Surname" required>
      </div>
      <div>
        <br>
        <input type="radio" name="gender" value="male" checked>Male
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="other">Other
      </div>
    </div>
    <hr>
    </div>
    <div style="text-align: center;">
      <input class="but" type="submit">
    </div>
    </form>
    <br>
    <br>
  <footer>
    <div class="footer">
      
    </div>
  </footer>
</body>
</html>