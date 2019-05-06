<?php include "connect.php";
session_start();
$q=mysqli_query($mysqli,"SELECT * FROM thread WHERE thread_id=$_GET[thread] LIMIT 1");
$thread=mysqli_fetch_assoc($q);
$query = mysqli_query($mysqli,"SELECT * FROM post WHERE thread_id=$_GET[thread]");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $thread['title'];?> - Thread @ kuliahGan</title>
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
                <a class="navbar-brand" href="index.php">
                    <h1>kuliahGan</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index_loggedin.php">Home</a></li>
                    <li><a href="home_loggedin.php">Forums</a></li>
                    <li><a href="about_us_loggedin.php">About Us</a></li>
                    <li><a href="newthread.php">New Thread</a></li>
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
            <?php echo "<h3 class='forum-title'>$thread[title]</h3
            <p class='forum-by'>By $thread[username]</p>";
            if($_SESSION['username']=="admin"){
                echo "<a href='editthread.php?thread=$_GET[thread]'><p class='forum-title'>Edit Thread</p></a>";
            }else if(isset($_SESSION['username'])){
                if($_SESSION['username']==$thread['username']){
                echo "<a href='editthread.php?thread=$_GET[thread]'><p class='forum-title'>Edit Thread</p></a>";
                }
            }?>
        </div>
        </div>
        <div class='container'>
        <?php while($hasil=mysqli_fetch_assoc($query)){
        $get=$hasil['thread_id'];
        $getpost=$hasil['id'];
        echo "<div class='well'>
                <div class='media'>
                    <div class='media-body'>
                        <h4 class='media-heading'>$hasil[username]</h4>
                        <p class='text-justify'>$hasil[content]</p>
                        <ul class='list-inline list-unstyled'>
                                <li><span><i class='glyphicon glyphicon-time'></i> Created $hasil[date_created]</span></li>
                                <li>|</li>
                                <li><span><i class='glyphicon glyphicon-time'></i> Last edited $hasil[date_edited] </span></li>";
                                if($_SESSION['username']=="admin"){
                                echo "
                                <li>|</li>
                                <li><span><a href='editpost.php?thread=$get&post=$getpost'>Edit Post</a></span></li>
                                <li>|</li>
                                <li><span><a href='deletepost.php?thread=$get&post=$getpost'>Delete Post</a></span></li>
                                </ul>
                        </div>
                    </div>
                </div>";
                                }else if(isset($_SESSION['username'])){
                                        if($_SESSION['username']==$hasil['username']){
                                        echo "<li>|</li>
                                        <li><span><a href='editpost.php?thread=$get&post=$getpost'>Edit Post</a></span></li>
                                        <li>|</li>
                                        <li><span><a href='deletepost.php?thread=$get&post=$getpost'>Delete Post</a></span></li>
                                        </ul>
                                </div>
                            </div>
                        </div>";}else{
                            echo "</ul>
                            </div>
                        </div>
                    </div>";
                        }
                                } else{
                                    echo "</ul>
                                    </div>
                                </div>
                            </div>";
                                }
                            }?>
            <?php echo"
            <div class=new-post>
                <label class='new-post-title'>New Post</label>
                <form action='newpost.php?thread=$_GET[thread]' method='post'>
                    <textarea id='content' name='content' class='form-control' placeholder='Your post/reply...'></textarea>
                    <div class='post-button'>
                        <button type='submit' class='btn btn-primary pull-right' id='submit'>Post</button>
                    </div>
                </form>
            </div>";?>
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