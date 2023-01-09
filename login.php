<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('connection.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `employes` WHERE username='$username'
                     AND pass_word='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows==1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location:homepage.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
  <div class="main-login">
   <center >
   <h1 class="logo-font1">
    <span class="logo-head1">
    <font color="#D92121" >K</font>
    <font color="#BD9F00" >M</font>
    <font color="#131F89">S</font>
    </span>
      <font class="logo-headtext1">Steel Industry</font>
    <font class="logo-subtext1">We Help To Build Dreams</font>
</h1>
    <form class="form" method="post" name="login">
        <h1 class="login-title">We Help To Build Dreams</h1>
        <input type="text" class="login-input" name="username" placeholder="username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="password"/>
        <input type="submit" value="Log in" name="submit" class="login-button"/>
        <p class="link  ">Don't have an account?<a href="signup.php">Sign up</a></p>
  </form>
  </center>
    </div>
<?php
    }
?>
</body>
</html>