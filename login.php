<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="product" content="Metro UI CSS Framework">
    <meta name="description" content="Simple responsive css framework">
    <meta name="author" content="Sergey S. Pimenov, Ukraine, Kiev">

    <link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/iconFont.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/prettify/prettify.css" rel="stylesheet">

    <title>Login</title>
</head>
<body class="metro" style="background: lightGray">
    <div class="navigation-bar dark">
        <div class="navigation-bar-content container">
            <a class="element1 pull-menu" href="#"></a>
            <ul class="element-menu">
                <li><br><a href="#profil">Home</a></li>
            </ul>
            <br>
            <div class="element place-right"><a href="login.php" class="fg-gray">Login</a></div>
        </div>
    </div>

    <div class="grid">
        <div class="row">
            <div class="span5 offset2">
                <img src="image/logo-be.png">
            </div><br><br><br>
            <div class="span6 offset2"><br><br>
                <form method="" action="pemesanan.php">
                   <label>Username</label>
                    <div class="span4 input-control text info-state">
                        <input type="text" placeholder="username" id="username"/>
                    </div><br><br>
                    <label>Password</label>
                    <div class="span4 input-control text info-state">
                        <input type="password" placeholder="password" id="password"/>
                    </div>
                    
                    <div style="padding-top:50px">
                    <button type="submit" class="bg-darkBlue fg-white large" id="">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>
    <script src="js/prettify/prettify.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="js/docs.js"></script>
    <script src="js/github.info.js"></script>
    <script src="js/hitua.js"></script>

</body>
</html>