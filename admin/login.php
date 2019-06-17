<?php
 include_once "../config.php" ;

 if($_SERVER['REQUEST_METHOD']=== 'POST'){
 $user = new \LIB\Models\User();
 $username=$_POST['username'];
 $password=$_POST['password'];
IF($user->checkLogin($username,$password)){
  echo "LogunSuccessful";

}
else{
  echo "Login failed";
}
die;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel - Login<?php echo _SITE_NAME; ?>  </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="processlogin.php" name="frmLogin" id="frmLogin">
              <h1>Login Form</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="username" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-default submit" name="btnLogin" value="Log In">
                <a class="btn btn-default submit" href="index.html">Log in</a>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

             
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>
