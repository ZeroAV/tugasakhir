<!DOCTYPE html>
<?php
session_start();
include_once('connect.php');
if(isset($_SESSION['username'])){
    header('Location: index_loggedin.php');
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/darkly/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/global.css" rel=stylesheet>
    <link href="css/login.css" rel=stylesheet>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Login</title>
</head>

<body>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


    <div class="row justify-content-center h-100">
        <aside class="col-sm-4">

            <div class="card" , style="">
                <article class="card-body">
                    <a href="signup.php" class="float-right btn btn-outline-primary">Sign up</a>
                    <h4 class="card-title mb-4 mt-1">Login</h4>
                    <form class="form-container" action="login_process.php" method="post">
                        <div class="form-group">
                            <label class="label">Username</label>
                            <input name="username" class="form-control" placeholder="Username" type="text" id="username">
                            <?php if(isset($_GET['wusername'])) :?>
                    <p class="text-danger">username tidak terdaftar</p>
                    <?php endif;?>
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <a class="float-right" href="#">Forgot?</a>
                            <label class="label">Password</label>
                            <input name= "password" class="form-control" placeholder="******" type="password" id="password">
                            <?php if(isset($_GET['wpassword'])) :?>
                    <p class="text-danger">Password salah</p>
                    <?php endif;?>
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <div class="checkbox">
                                <label class="label"> <input type="checkbox"> Save password </label>
                            </div> <!-- checkbox .// -->
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Login </button>
                        </div> <!-- form-group// -->
                    </form>
                </article>
            </div> <!-- card.// -->

        </aside> <!-- col.// -->
        </article>
</body>

</html>
