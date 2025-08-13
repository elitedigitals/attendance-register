<?php include_once "./header.php" ?>;
<?php require "./config/db.php"; ?>

<?php
if (isset($_SESSION['username'])) {
  header("location: clients/");
}

if (isset($_POST['login'])){
  if (empty($_POST['username']) OR empty($_POST['password'])) {
    echo "<div> class='alert alert-warning' role='alert'>some inputs are empty</div>";
  }else{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = $con->query("SELECT * FROM admin WHERE username ='$username'");
    $login->execute();

    $log = $login->fetch(PDO::FETCH_ASSOC);

    if($login->rowCount() > 0){
      if ($password == $log['password']){
        $_SESSION['username'] = $log['username'];
        $_SESSION['id'] = $log['id'];
        $_SESSION['password'] = $log['password'];
        $_SESSION['status'] = $log['status'];
    
        header("location: clients/");
      }else
        echo"invalid logins";

      }else{
        echo "no user found";
    }
  }

}


?>

<body>
    
<form  action="index.php" method="post" class="login-form">
  <h2 style="color: white; text-align:center">DIGILANX TECHNOLOGIES <br>Employee Register</h2>
  <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>
  <input type="text" class="login-username" name="username" autofocus="true" required="true" placeholder="Employee username" />
  <input type="password" class="login-password" name="password" required="true"  placeholder="Password" />
  <input type="submit" name="login" value="Login" class="login-submit" />
</form>
<a href="#" class="login-forgot-pass">forgot password?</a>
<div class="underlay-photo"></div>
<div class="underlay-black"></div> 



</body>
</html>