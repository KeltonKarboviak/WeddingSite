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

        <title>Kelton Loves Mary</title>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <?php
            include("Utils.php");
            $IMG_PATH = "./img";
            $CAROUSEL_PATH = "$IMG_PATH/carousel";
            $ICON_PATH = "$IMG_PATH/icon";
        ?>

        <nav id="site-menu" class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div id="site-menu-header" class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#site-menu-collapse">
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img class="img-responsive" src="<?php echo "$ICON_PATH/mk-brand.png" ?>"></a>
                </div> <!-- /#site-menu-header -->

                <div id="site-menu-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#photos">Photos</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="#save-the-date">Save The Date</a></li>
                        <li><a href="#registry">Registry</a></li>
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
                    <div class="slide <?php echo $numImgs++ !== 0 ? "" : "active-slide" ?>">
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
                    <a id="arrow-prev" class="btn btn-default btn-sm" href="#">
                        <span class="glyphicon glyphicon-chevron-left"></span> Prev
                    </a>
                    <ul class="carousel-dots">
                        <?php for ($i = 0; $i < $numImgs; $i++): ?>
                        <li class="dot <?php echo $i !== 0 ? "" : "active-dot" ?>">&bull;</li>
                        <?php endfor; ?>
                    </ul> <!-- /.carousel-dots -->
                    <a id="arrow-next" class="btn btn-default btn-sm" href="#">
                        Next <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <p>* Note: The professional photography for our engagement pictures was done by <a href="http://bergephotography.wix.com/bergephotography">Abigail Berge</a>.</p>
                </div> <!-- /.container -->
            </div> <!-- /#carousel-nav -->
        </section> <!-- /#photos -->

        <section id="about-us">
            <div class="container">
                <h1>About Us</h1>
                <h3>From Mary:</h3>
                <p>
                    So this one time I went to McDonald's with this guy whom I had formerly kidnapped on his birthday.  This time it was his goofy, shy roommate’s birthday and I had never met him.  Turned out his name was Kelton Olson Karboviak and he was nerdy, but cute and really, really funny.  That night we both made a decision.  I decided I had to be his friend and he decided I was a real weirdo.  I actually can’t blame either of us.  Over the next 3 years I grew to learn that Kelton was the kindest, most loyal, loving, smart man of God I could possibly hope to befriend.  And don’t tell him but I kind of always had a crush on him.
                </p>
                <p>
                    If you are someone reading this and don’t know Kelton here is a little taste of what we’re dealing with.  In January, in NORTH DAKOTA, our freshmen year I walked across campus at about 6am on a Saturday morning to catch a bus to work.  Now if you’ve never been in North Dakota in the middle of January, you don’t know how wonderful the next part of the story truly is.  When the bus didn’t come, I realized I would definitely be late to work and I panicked and called Kelton because I knew he had a car, haha.  I woke him up and he was nothing but kind.  He walked out to his car, which was not parked close by the way, in his PJ’s, through the snow, brushed off the car (more like shoveled it off) and came to get me.  My hero!  Keep in mind he and I had only been friends for a few months at this point.  That trait of dependability is something that he values and has proven time and time again that he will always be where you need him when you need him without a complaint (even when you ask him to move a giant mattress in the rain.)  Doesn’t everyone need someone like that in their life?
                </p>
                <p>
                    We have an amazing group of friends who are seriously more like family.  Kelton and I spent 3 years being friends, spending time with that group of gems, building memories and getting to know each other.  When we both realized we liked each other we were nervous about how our friends would react because we loved them so much and we didn’t want to mess up the dynamics.  We shouldn’t have worried and we shouldn’t have been surprised to learn that our friends were the most supportive people ever.  They have loved on us individually and as a couple, and we love them.  They even all lied to me and pretended to ditch me at a pumpkin patch so I would be surprised when Kelton gave me a shiny thing for my finger.  They were all in the corn maze at Nelson’s Pumpkin patch, my happy place in Grand Forks, with pictures and signs and hugs on my walk to Kelton at the end.
                </p>
                <p>
                    So the story of us:  We are super different.  I love that.  We are crazy loved by our amazing friends and family.  I don’t know how we deserved that.  Kelton still thinks I’m a weirdo.  I totally understand that.  There will be cake.  And, I am marrying my very best friend on July 2nd.  I can’t wait.
                </p>


                <h3>From Kelton:</h3>
                <p>
                    On a Friday night during my Freshman year, my roommate Justin asked me if I wanted to go out to McDonald's after the football game with this group of friends that he met through marching band. I was hesitant at accepting the offer for a couple reasons. First reason, I'm a very shy person (which becomes very ironic later) so it takes a lot of work and courage for me to get to know and be comfortable with a whole new group of people. Second reason, I wasn't sure how fun it would be to hang out with a group of marching band nerds, lol. Just kidding cause you have no idea how many people I know and am friends with now that were once in the band. But I eventually decided to tag along with Justin cause I honestly didn't have many friends up to that point so I thought it would be best to venture out of my comfort zone a little bit. So we get to McDonald's, then I meet everyone individually, and find that everyone is so very different from each other personality wise. One person in particular, Mary Lockett, was the most open and outgoing out of the whole group (that's the ironic part, the exact opposite of me ha). I thought she was cute, funny, and nice, but her extroverted personality was unfortunately too much for my relaxed and chilled back nature at the time.
                </p>
                <p>
                    Now let's fast-forward through the next couple of years after becoming super close friends with that new group of band nerds and a couple of other people that weren't in the band (non-band people unite!). I've been able to spend time with each person on an individual basis and was able to learn more about them personally. I found out from learning more about that one particular girl, Mary Lockett, that she has one of the most positive, nicest, hard-working, and nurturing hearts of anyone that you'll ever meet. That awesome heart of hers has been shaped by her dedication to and relationship with her family and the Lord, which is one of my favorite things about her. I started to have a crush on her after we'd been friends for a couple years, and I noticed how she always paid attention to me and tried to make a point to spend time with me, which I started to appreciate and enjoy a lot more :) The time I remember most was during the summer after our Sophomore year, and she was visiting in Grand Forks for a couple days after getting back from Cuba. I thought it was pretty awesome that she would want to hang out with just lame-old me in Grand Forks, ND when she would only be here for 2 days before shipping back up to Alaska for the rest of the summer. She and I had a nice time together although we just walked my brother's dog, got some food, talked, and watched a movie. We both flirted back and forth a little bit and I only picked up some of her hints (she'll tell you that she flirted waaaaaay more than I noticed, but that's a lie and I won't accept it, ha). But that marks the time that I really started to like this particular girl, Mary Lockett.
                </p>
                <p>
                    Now fast-forward even further, we started dating and have been for over a year now and have now been engaged for several months as well! She knows me so well that she can tell when I'm in a bad mood or I need to talk before I even say a word. She's a great listener when I need her to be and, when I forget, always reassures me that God is looking out for us. Our time being together has been some of the happiest times of my life, and I'm so glad that I will get to make soooo many more memories with her (good and bad) for the rest of my life.
                </p>
                <p>
                    <a href="https://en.wikipedia.org/wiki/Wikipedia:Too_long;_didn%27t_read">TL;DR</a> version:  Very shy, computer nerd boy meets a very outgoing, music nerd girl. Become close friends. Start to realize that their weirdness are meant for each other. Date. Become engaged. Will become one for the rest of their lives this summer, July 2, 2016.
                </p>
            </div> <!-- /.container -->
        </section> <!-- /#about-us -->

        <section id="save-the-date">
            <div class="container">
                <h1>Save The Date</h1>
                <h3>When?</h3>
                <p>July 2<sup>nd</sup>, 2016!</p>

                <h3>Where?</h3>
                <p>
                    The wedding ceremony will be held at <a href="http://www.freedomchurchgf.com/">Freedom Church</a> in Grand Forks, ND at 4:00pm. The address is 308 Demers Ave, Grand Forks, ND 58203
                </p>
                <p>
                    The reception will follow at 6:00pm at the <a href="http://goo.gl/5u4Mp9">Ramada</a> in Grand Forks, ND.  Reservations can be made at (701) 775-3951.  The address is 1205 N 43rd St, Grand Forks, ND 58203.  Ask for the rooms blocked for the Lockett/Karboviak wedding on July 2nd.  Reservations must be made no later than June 11th!
                </p>

                <h3>Any Questions?</h3>
                <p>
                    If you have any questions, feel free to call Mary at (701) 330-1961, or Kelton at (701) 521-0226.
                </p>
                <img class="img-responsive" src="<?php echo "$IMG_PATH/save_the_date.png" ?>" />
            </div> <!-- /.container -->
        </section> <!-- /#save-the-date -->

        <section id="registry">
            <div class="container">
                <h1>Registry</h1>
                <p>We have wedding registries at both Macy's and Target. You can view them online if you click their respective logos below!</p>
                <p>
                    Currently Macy's is having a deal that if you buy a gift off a couple's registry, you can get $20 off a future purchase of $50 or more shopping on macys.com! So you can get a nice gift while giving us a gift. That's what I call a win, win :) The deal expires on April 15, 2016 so get it while you can! Also, you can <a href="https://goo.gl/vj8ucX">Click Here</a> if you'd like to learn more about it!
                </p>
                <div class="row">
                    <div class="col-xs-6">
                        <a href="http://www.macys.com/registry/wedding/guest/?registryId=6508198">
                            <img class="img-responsive" src="<?php echo "$ICON_PATH/macys.jpg" ?>" />
                        </a>
                    </div> <!-- /.col-xs-6 -->
                    <div class="col-xs-6">
                        <a href="http://www.target.com/gift-registry/registry/o40Tg7ouG5xofA7xSIv63Q">
                            <img class="img-responsive" src="<?php echo "$ICON_PATH/target.jpg" ?>" />
                        </a>
                    </div> <!-- /.col-xs-6 -->
                </div> <!-- /.row -->
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <p>Created by Kelton Karboviak, much of the writing done by Mary Lockett <span class="glyphicon glyphicon-heart" style="color: #F00;"></span>, and design accomplished using <a href="http://getbootstrap.com/">Bootstrap</a>.</p>
                <p>Credit for professional photographs to <a href="http://bergephotography.wix.com/bergephotography">Abigail Berge Photography</a>.</p>
                <p>&copy; Kelton Karboviak, 2016</p>
            </div>
        </footer>


        <!-- jQuery Script & Fallback -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="./js/vendor/jquery-1.9.1.min.js"><\/script>');</script>
        <!-- Custom JavaScript -->
        <script src="./js/plugins.js"></script>
        <script src="./js/main.js"></script>
    </body>
</html>
