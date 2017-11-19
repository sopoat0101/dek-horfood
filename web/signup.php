<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/master.css">
	<meta charset="utf-8">
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
    <form action="" method="POST" autocomplete="off">
      <div class="name">
        <div class="inname">
          <table>
            <tr>
              <td><input type="text" name="username" method="POST" placeholder="Username" required></td>
            </tr>
            <tr>
              <td><input type="password" name="password" method="POST" placeholder="Password" required></td>
            </tr>
            <tr>
              <td><input type="password" name="confirm" method="POST" placeholder="Confirm Password" required></td>
            </tr>
            <tr>
              <td><input type="text" name="email" placeholder="E-mail" required></td>
            </tr>
            <tr>
              <td><input type="text" name="name" placeholder="Name" required></td>
            </tr>
            <tr>
              <td><input type="text" name="surname" placeholder="Surname" required></td>
            </tr>
            <tr>
              <td>
                <input type="radio" name="gender" value="male" checked>Male
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="other">Other
              </td>
            </tr>
          </table>
          <br>
          <br>
          <input id="button" type="submit" name="SUBMIT">
        </div>
      </div>
    </form>
  </div>
    <br>
    <br>
  <footer>
    <div class="footer">
      
    </div>
  </footer>
</body>
</html>