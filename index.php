<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!-- Google Font -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Pacifico">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/main.css">

        <title>WEDDING!</title>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <?php
            include("Utils.php");
            $IMG_PATH = "./img";
            $CAROUSEL_PATH = "$IMG_PATH/carousel";
        ?>

        <nav id="site-menu" class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div id="site-menu-header" class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#site-menu-collapse">
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                </div> <!-- /#site-menu-header -->

                <div id="site-menu-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#photos">Photos</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="#save-the-date">Save The Date</a></li>
                    </ul>
                </div> <!-- /#site-menu-collapse -->
            </div> <!-- /.container -->
        </nav> <!-- /#site-menu -->

        <section id="photos">
            <div class="container">
                <h1>Photos</h1>
                <div id="carousel" class="carousel">
                    <?php $imgNames = Utils::dirToArray($CAROUSEL_PATH); $numImgs = 0; ?>
                    <?php foreach ($imgNames as $img): ?>
                    <div class="slide <?php echo ++$numImgs !== 1 ? "" : "active-slide" ?>">
                        <div class="row">
                            <div class="col-xs-12">
                                <img class="img-responsive" src="<?php echo "$CAROUSEL_PATH/$img" ?>" />
                            </div> <!-- /.col-xs-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.slide -->
                    <?php endforeach; ?>
                </div> <!-- /#carousel -->
            </div> <!-- /.container -->

            <div id="carousel-nav" class="carousel-nav">
                <div class="container">
                    <a id="arrow-prev" class="btn btn-default btn-sm" href="#carousel">
                        <span class="glyphicon glyphicon-chevron-left"></span> Prev
                    </a>
                    <ul class="carousel-dots">
                        <?php for ($i = 0; $i < $numImgs; $i++): ?>
                        <li class="dot <?php echo $i !== 0 ? "" : "active-dot" ?>">&bull;</li>
                        <?php endfor; ?>
                    </ul> <!-- /.carousel-dots -->
                    <a id="arrow-next" class="btn btn-default btn-sm" href="#carousel">
                        Next <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div> <!-- /.container -->
            </div> <!-- /#carousel-nav -->
        </section> <!-- /#photos -->
        
        <section id="about-us">
            <div class="container">
                <h1>About Us</h1>
                <h3>From Mary:</h3>
                <p>
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                </p>
                
                <h3>From Kelton:</h3>
                <p>
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                    Here's a little story about how Mary & Kelton became engaged.
                </p>
            </div> <!-- /.container -->
        </section> <!-- /#about-us -->
        
        <section id="save-the-date">
            <div class="container">
                <h1>Save The Date</h1>
                <p>
                    Here's some info about the wedding and location and other stuff.
                    Here's some info about the wedding and location and other stuff.
                    Here's some info about the wedding and location and other stuff.
                    Here's some info about the wedding and location and other stuff.
                    Here's some info about the wedding and location and other stuff.
                    Here's some info about the wedding and location and other stuff.
                    Here's some info about the wedding and location and other stuff.
                    Here's some info about the wedding and location and other stuff.
                    Here's some info about the wedding and location and other stuff.
                    Here's some info about the wedding and location and other stuff.
                    Here's some info about the wedding and location and other stuff.
                    Here's some info about the wedding and location and other stuff.
                </p>
                <img class="img-responsive" src="<?php echo "$IMG_PATH/save_the_date.png"; ?>" />
            </div> <!-- /.container -->
        </section> <!-- /#save-the-date -->


        <!-- jQuery Script & Fallback -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="./js/vendor/jquery-1.9.1.min.js"><\/script>');</script>
        <!-- Custom JavaScript -->
        <script src="./js/plugins.js"></script>
        <script src="./js/main.js"></script>
    </body>
</html>