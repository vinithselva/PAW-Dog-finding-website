<?php include('server.php')?>
<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/login_style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
</head>

<body class="body">


	<!--
	<a href="https://github.com/Mehedi61/Login-form-Sign-up-form"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://camo.githubusercontent.com/c6625ac1f3ee0a12250227cf83ce904423abf351/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f677261795f3664366436642e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_gray_6d6d6d.png"></a>
-->
<div class="login-page">
  <div class="form">

    <form method="post" action="login.php">
        <?php include('errors.php'); ?>
      <input type="text" placeholder="&#xf007;  username" name="username">
      <input type="text" placeholder="&#xf007;  E-mail" name="email">
      <input type="password" placeholder="&#xf023;  password" name="password"/>
      <button type="submit" name="login_user">LOGIN</button>
      <p class="message"></p>
    </form>

    <form class="login-form">
      <button type="button" onclick="window.location.href='signup.php'">SIGN UP</button>
    </form>
  </div>
</div>

</body>
</html>
