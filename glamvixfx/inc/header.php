<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $pageTitle ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/glamvixfx.css" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile.structure-1.3.2.min.css" /> 
        <link rel="stylesheet" href="css/SlideJS.css" />
        <link rel="stylesheet" href="css/main.css" />
        <link href='http://fonts.googleapis.com/css?family=Bilbo+Swash+Caps' rel='stylesheet' type='text/css'>

        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
    </head>
    <body>

        <div data-role="page" data-theme="a">

            <div data-role="panel" id="mypanel">

                <div class="mycontent">
                    <img src="images/glamfx.png" width="200" style="margin-left: auto; margin-right: auto;"/>
                </div>

                <ul data-role="listview" data-theme="a">
                    <li><a href="index.php" data-ajax="false">Home</a></li>
                    <li><a href="about.php" data-ajax="false">About</a></li>
                    <li><a href="gallery.php" data-ajax="false">Gallery</a></li>
                    <li><a href="rates.php" data-ajax="false">Rates</a></li>
                    <li><a href="booking.php" data-ajax="false">Booking</a></li>
                    <li><a href="QA.php" data-ajax="false">Q & A</a></li>
                </ul>

                <div id="social_icons">
                    <p><b><u>Follow us: </u></b></p>
                    <a href="https://www.facebook.com/GlamVixFxMakeup"><div id="facebook" class="icon"></div></a>
                    <a href="https://twitter.com/iHeartGlamVIXfx"><div id="twitter" class="icon"></div></a>
                    <a href="http://instagram.com/iheartglamvixfx"><div id="instagram" class="icon"></div></a>
                    <a href="http://www.youtube.com/user/GlamVixFx"><div id="youtube" class="icon"></div></a>
                </div>

            </div><!-- /panel -->

            <div data-role="header" id="header" data-position="fixed">
                <a href="#mypanel" class="mymenu"></a>
                <span class="ui-title"></span>
                <h1><?php echo $pageTitle; ?></h1>
            </div><!-- /header -->

            <div data-role="content">