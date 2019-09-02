
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.min.css">
    <title>Apatment Small Selling</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";
    ?>
    <nav class="navbar navbar-default navbar-fixed-top menu" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Apatment Small Selling</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about">About</a></li>
                    <li><a href="#service">Service</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

    <div class="container-fluid banner" id="about">
        <div class="row row-of-banner">
            <h1><b>Small Apatment </b></h1>
            <h3> Future </h3>
            <hr style="width: 50%">
            <button class="btn btn-default"><i class="fa fa-at"></i>&ensp;Email</button>
            <button class="btn btn-default"> <i class="fab fa-facebook-f"></i>&ensp; Facebook</button>
            <button class="btn btn-default"><i class="fab fa-instagram"></i>&ensp; Instagram</button>
        </div>
    </div>

    <div class="container intros" id="service">
        <div class="row row1">
            <div class="col-xs-12 col-sm-6">
                <hr style="float:left; width:20em; border-top: 0.1em gray solid">
                <div style="clear: both;"></div>
                <h1>Introduction</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Excepteur sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt mollit anim id est laborum
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat. <br>
                    <b>Address: </b> Lorem, ipsum dolor quis nostrud exercitation . <br>
                    <b>Open/Close Hour: </b> 07h00/23h00 everyday (except national holidays)</p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <img src="img/box1.jpg" alt="Working Room">
            </div>
        </div>
    </div>

    <div class="container intros">
        <div class="row row2">
            <div class="col-xs-12 col-sm-6">
                <hr style="float:left; width:20em; border-top: 0.1em gray solid">
                <div style="clear: both;"></div>
                <h1> About </h1>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, eveniet.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, eveniet.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, eveniet.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, eveniet.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, eveniet.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, eveniet.</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6">
                <img src="img/box2.jpg" alt="Working Space">
            </div>
        </div>
    </div>

    <div class="container intros">
        <div class="row row3">
            <div class="col-xs-12 col-sm-6">
                <hr style="float:left; width:20em; border-top: 0.1em gray solid">
                <div style="clear: both;"></div>
                <h1>Our List Apartment</h1>
                <ul>
                    <li>Apartment for  couple </li>
                    <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, eveniet.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, eveniet.</li>
                    <li> 
                </ul>
                    <li>Apartment for one person </li>
                    <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, eveniet.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, eveniet.</li>
                    <li> 
                </ul>
                    <li>Apartment for family</li>
                    <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, eveniet.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, eveniet.</li>
                    <li> 
                </ul>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6">
                <img src="img/box3.jpg" alt="Working View">
            </div>
        </div>
    </div>

    <div class="container-fluid banner-below" id="contact">
        <div class="row row-of-banner">
            <h1><b>CONTACT US</b></h1>
            <h2><b>Nguyen Quoc Huy</b></h2>
            <h3><b>GCS17493</b></h3>
            <hr style="width: 50%; float:left">
            <div class="clearfix"></div>
            <button class="btn btn-default"><i class="fa fa-at"></i>&ensp;Email</button>
            <button class="btn btn-default"> <i class="fab fa-facebook-f"></i>&ensp; Facebook</button>
            <button class="btn btn-default"><i class="fab fa-instagram"></i>&ensp; Instagram</button>
        </div>
    </div>

    <div class="container footer">
        <div class="row">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#"><i class="fa fa-circle"></i></a></li>
                <li><a href="#">About</a></li>
                <li><a href="#"><i class="fa fa-circle"></i></a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#"><i class="fa fa-circle"></i></a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <p>Copyright © Your Company 2019. All Rights Reserved</p>
        </div>
    </div>

    <script src="javascript/main.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>