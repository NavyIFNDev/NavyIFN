<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Navy IFN Login</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/mediaquery.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="css/waves.css">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,400" rel="stylesheet">
</head>
<body>

  <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.html"><img src="images/navylogo.png" width="60" height="60" ></a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link buttonStyle" href="index.html">Home</a>
        <a class="nav-item nav-link buttonStyle" href="roster.html">Roster</a>
        <a class="nav-item nav-link buttonStyle" href="documents.php">Documents</a>
        <a class="nav-item nav-link buttonStyle" href="login.php">Login</a>
        <div id="loggedin" style="display:none">Logged in!</div>
      </div>
    </div>
  </nav>

<div class="waves">
  <div class="wave wave_1"></div>
	<div class="wave wave_2"></div>
	<div class="wave wave_3"></div>
	<div class="wave wave_4"></div>
	<div class="wave wave_5"></div>
</div>
  
<div class="loginform">
  <div class="login-page">
    <div class="form">
      <form class="login-form" method="post" action="authen_login.php">
        <input type="text" name="user_id" id="user_id"/>
        <input type="password" name="user_pass" id="user_pass"/>
        <button type="submit" class="buttonStyle">login</button>
      </form>
    </div>
  </div>
</div>

  <!-- Bootstrap javascript - DON'T DELETE -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="js/login.js"></script>
</body>
</html>