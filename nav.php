<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CareRott</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
    <link href="CareRott_files/bootstrap.css" rel="stylesheet">
    <link href="css/nav.css" rel="stylesheet">
 
</head>
<body>

 <!-- Navigation -->
 <nav class="navbar navbar-default navbar-fixed-top navbar-shrink top-nav">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand page-scroll" href="#page-top"><img src="CareRott_files/logo.png" alt="Logo" height="50" width="171"></a> </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div style="height: 0.8px;" aria-expanded="false" class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden active">
                        <a href="#page-top"></a>
                    </li>
                    <!--<li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li> 
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>-->
                    <li class="">
                        <a class="page-scroll" href="#team">About Us</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <?php if(!isset($_SESSION["username"])) {  ?>
                        <li class="">
                            <a class="page-scroll" href="login.php">Login</a>
                        </li>
                    <?php } else {?>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li class="">
                        <a href="logout.php">Logout</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</body>
</html>
 