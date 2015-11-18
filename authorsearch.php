<!DOCTYPE html>
<html lang="en">
<head>
    <title>Author Search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="images/earth.ico">
    <style>
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }
        .row.content {height: 450px}

        .sidenav{
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        footer{
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /*on small screens, set height to 'auto' for sidenav and grid*/
        @media screen and (max-width: 767px){
            .sidenav{
                height: auto;
                padding; 15px;
            }
            .row.content {height: auto;}
        }
    </style>
</head>
<body>
<?php /*<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href"#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <ul class = "nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
        </ul>
    </div>
</nav>*/ ?>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="welcome.php"><span class="glyphicon glyphicon-globe"></span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#carousel">TOP 5 TRIPS</a></li>
                <li><a href="#" data-toggle="modal" data-target="#modal-reg">REGISTER</a></li>
                <li>
                    <form role="form" style="padding-top: 10px" class="form-inline" action="welcome.php" method="post">
                        <input class="form-control" type="text" name="usernameInput" placeholder="Username">
                        <input class="form-control" type="password" name="passwordInput" placeholder="Password">
                        <button type="submit" class="btn btn-success">LOGIN</button>
                    </form>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="adventuresearch.html">ADVENTURE SEARCH</a></li>
                        <li><a href="authorsearch.html">AUTHOR SEARCH</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <h1>Welcome</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            <hr>
            <h3>Test</h3>
            <p>Lorem ipsum...</p>
        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <p>ADS</p>
            </div>
            <div class="well">
                <p>ADS</p>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>
</body>
<?php
/**
 * Created by PhpStorm.
 * User: Finlay
 * Date: 18/11/2015
 * Time: 13:13
 */
?>

</html>
