<!DOCTYPE html>
<html lang="en">
<head>
    <title>Author Search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="images/earth.ico">
    <style>

        .row.content {height: 450px}

        .sidenav{
            padding-top: 20px;
            background-color: #19BEF0;
            height: 100%;
        }

        .col-sm-8{
            padding-top: 40px;
            background-color: #19BEF0;
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
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<!--navbar-->
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
                <li><a href="welcome.php#carousel">TOP 5 TRIPS</a></li>
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
                        <li><a href="authorsearch.php">AUTHOR SEARCH</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--modal-->
<div class="modal fade" id="modal-reg" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span> Register your account</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="post" id="registerForm">
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" id="firstname" placeholder="E.g Peregrin">
                        </div>
                        <div class="col-sm-6">
                            <label for="surname">Last name</label>
                            <input type="text" class="form-control" id="surname" placeholder="Took">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
                        <input type="text" class="form-control" id="username" placeholder="FoolOfATook">
                    </div>
                    <div class="form-group">
                        <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email Address</label>
                        <input type="text" class="form-control" id="email" placeholder="WhatAboutSecondBreakfast@hobbitmail.com">
                    </div>
                    <div class="form-group">
                        <label for="password"><span class="glyphicon glyphicon-lock"></span> Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="passwordconfirm"><span class="glyphicon glyphicon-lock"></span> Confirm Password</label>
                        <input type="password" class="form-control" id="passwordconfirm" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-block">
                        Submit<span class="glyphicon glyphicon-ok"></span>
                    </button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-block" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove"></span> Cancel
                </button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <h1>Search results for *searchValue*</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            <h3>Test</h3>
            <p>Lorem ipsum...</p>
            <h1>Second item</h1>
            <h1><a href="#">third item</a></h1>
            <h1>A</h1>
            <h1>B</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="thumbnail">
                            <p>Hobbiton</p>
                            <img src="http://bit.ly/1oHaE7t" alt="Hobbiton" style="width:150px;height:150px">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="thumbnail">
                            <p>Hobbiton2</p>
                            <img src="http://bit.ly/1oHaE7t" alt="Hobbiton" style="width:150px;height:150px">
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="thumbnail">
                            <p>Hobbiton2</p>
                            <img src="http://bit.ly/1oHaE7t" alt="Hobbiton" style="width:150px;height:150px">
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="thumbnail">
                        <p>Hobbiton</p>
                        <img src="http://bit.ly/1oHaE7t" alt="Hobbiton" style="width:150px;height:150px">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="thumbnail">
                        <p>Hobbiton2</p>
                        <img src="http://bit.ly/1oHaE7t" alt="Hobbiton" style="width:150px;height:150px">
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="thumbnail">
                        <p>Hobbiton2</p>
                        <img src="http://bit.ly/1oHaE7t" alt="Hobbiton" style="width:150px;height:150px">
                    </a>
                </div>
            </div>
        </div>
       <!-- <div class="col-sm-2 sidenav">
            <div class="well">
                <p>ADS</p>
            </div>
            <div class="well">
                <p>ADS</p>
            </div>
        </div>-->
    </div>
</div>

<footer class="container-fluid  bg-4 text-center">
    <p>Wanderblog is a part of SHB Innovative Solutions</p>
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
