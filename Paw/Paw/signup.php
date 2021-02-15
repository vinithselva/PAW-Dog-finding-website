<?php include('server.php')?>
<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/signup_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
</head>

<body class="body">
<!--
  <a href="https://github.com/Mehedi61/Login-form-Sign-up-form"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://camo.githubusercontent.com/c6625ac1f3ee0a12250227cf83ce904423abf351/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f677261795f3664366436642e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_gray_6d6d6d.png"></a>
-->
<div class="login-page">
  <div class="form" >

    <form method="post" action="signup.php">
      <?php include('errors.php'); ?>
      <input type="text" placeholder="full name" name="name"/>
      <input type="text" placeholder="email address" name="email"/>
      <input type="number" placeholder="mobile" name="mobile"/>
      <input type="password" placeholder="set a password" name="password_1"/>
      <input type="password" placeholder="confirm password" name="password_2"/>

      <input type="submit" class="signup" name="reg_user" value="Sign me up" />
    </form>

  </div>
</div>

</body>
</html>
