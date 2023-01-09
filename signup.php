<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('connection.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con,$email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `employes` (username, pass_word, email, create_datetime)
                     VALUES ('$username', '$password', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
<div class="main-signup">
<center>
<h1 class="logo-font1">
    <span class="logo-head1">
    <font color="#D92121" >K</font>
    <font color="#BD9F00" >M</font>
    <font color="#131F89">S</font>
    </span>
      <font class="logo-headtext1">Steel Industry</font>
    <font class="logo-subtext1">We Help To Build Dreams</font>
</h1>
    <form class="form" action="" method="post">
    <h1 class="login-title">We Help To Build Dreams</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Sign Up" class="login-button">
        <p class="link">Already have an account?<a href="login.php"> Log in </a></p>
    </form>
    </center>
    </div>
<?php
    }
?>
</body>
</html>