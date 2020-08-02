<?php @ob_start(); include "connection.php";

if(!empty($_SESSION['maxdeal_admin']))
{
  header("location:index.php"); 
}
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Login | Filter System</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="web/logo.png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="home-btn d-none d-sm-block"></div>
    <div class="wrapper-page wrapper-page-login">
        <div class="card overflow-hidden account-card mx-3">
            <div class="bg-primary p-4 text-white text-center position-relative">
                <h4 class="font-20 m-b-5">Welcome Admin !</h4>
                <p class="text-white-50 ">Sign in to continue to Dashboard.</p>
                <a style="margin: 0px; padding: 0px; ">
                    <img src="../user/web/logo.png" alt="" height="70">
                </a>
            </div>
            <div class="account-card-content">
                            <form method="POST">
                                
<?php if (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger">Alert! User name or password is incorrect.</div>
<?php unset($_SESSION['error']); endif; ?> 

                                            <div class="row">
                                                <div class="col-12">

                                                    <div class="form-group">
                                                        <label class="form-label">Username</label>
                                                        <div class="controls">
                                                            <input type="text" class="form-control lowercase" name="user_name" placeholder="user name">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-label">Password</label>
                                                        <div class="controls">
                                                            <input type="password" class="form-control" name="password" placeholder="password">
                                                        </div>

                    
                                                                        </div>


                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <a href="../index.php" class="btn btn-primary w-md waves-effect waves-light">Back</a>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">

                                                    <button style="float: right" class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                                </div>
                                            </div>
                                        </form>


<?php if ($_POST) {
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];


$select="select * from admin_login where user_name='$user_name' and password='$password'";
$res=mysqli_query($con,$select);
$data=mysqli_fetch_array($res);
if($data['user_name']!=$user_name or $data['password']!=$password)
{
    $_SESSION['error']='ok';
    ?>   <script type="text/javascript">window.location.href="login.php"</script>   <?php
}

elseif($data['user_name']==$user_name and $data['password']==$password)
{

  $_SESSION['maxdeal_admin']=$user_name; 
  
    header("location:index.php");

}

} ?>



            </div>
        </div>
        <div class="m-t-40 text-center">
            <p>© 2020 Filter System</p>
        </div>
    </div>
    <!-- end wrapper-page -->
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>