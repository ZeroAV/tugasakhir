<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>New Thread - kuliahGan</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <link href="css/thread.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <!-- Preloader -->
    <div id="preloader">
        <div id="load"></div>
    </div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index_loggedin.php">
                    <h1>kuliahGan</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index_loggedin.php">Home</a></li>
                    <li><a href="home_loggedin.php">Forums</a></li>
                    <li><a href="about_us_loggedin.php">About Us</a></li>
                    <li classs="active"><a href="newthread.php">New Thread</a></li>
                    <li class="dropdown">
                        <?php echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Hi, $_SESSION[username]!<b class='caret'></b></a>";?>
                        <ul class="dropdown-menu">
                            <li><a href="logout_process.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" />
    <section id="latest" class="latest">
        <div class="latest-threads">
            <h3 class="title">New Thread</h3>
        </div>
        </div>
        <div class="container">
            <div class=new-post>
                <form action="newthread_process.php" method='post'>
                    <label class="new-post-title">Thread Title</label>
                    <textarea id="title" name="title" class="form-control" placeholder="Thread title..." autofocus required></textarea>
                    <label class="new-post-title">First Post</label>
                    <textarea id="content" name="content" class="form-control" placeholder="First post..." required></textarea>
                    <div class='post-button'>
                        <button type='submit' class='btn btn-primary pull-right' id='submit'>Post</button>
                    </div>
                </form>
            </div>
        </div>



        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="credits">
                            <p><span class="glyphicon glyphicon-copyright-mark"></span>kuliahGan Team</p>
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

</body>

</html>