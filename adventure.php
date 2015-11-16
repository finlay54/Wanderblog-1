<html>
    <head>
        <title>Adventure</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Stylesheets/adventureStyle.css" type="text/css">
    </head>

    <body>

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
                    <li><a href="#modal-login">LOGIN</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="about.php">ABOUT</a></li>
                            <li><a href="adventuresearch.html">ADVENTURE SEARCH</a></li>
                            <li><a href="suthorsearch.html">AUTHOR SEARCH</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="modal-reg" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Register your account</h4>
                </div>
                <div class="modal-body">
                    <form role="form">
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


<!-- MY CODE -->
        <div class="container-fluid bg-grey" id="Title">
            <div class="row">
                <div class="col-sm-4">
                    <img class="profilePhoto" src="Stylesheets/Images/LOTR.jpg" alt="PIC HERE">
                </div>
                <div class="col-sm-8">
                    <h2>There and Back Again: A Hobbit's Tale</h2>
                    <h4>by <a href="#">Bilbo Baggins</a></h4>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <h4>I went on an adventure</h4>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>

        <div class="container-fluid bg-grey" id="photos">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <h4>Photos will be here</h4>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>


    </body>
</html>