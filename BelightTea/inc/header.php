<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $pageTitle ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable="no">
        <link rel="stylesheet" href="css/Belight-Tea.css" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile.structure-1.3.2.min.css" /> 
        <link rel="stylesheet" href="css/main.css" />

        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
    </head>
    <body>

        <div data-role="page" data-theme="a">

            <div data-role="panel" id="mypanel" data-display="push" data-position="left">

                <div class="panel_logo">
                    <img src="images/logo.png">
                </div>

                <ul data-role="listview" data-theme="b">
                    <li><a href="/" data-ajax="false">Home</a></li>
                    <li><a href="about" data-ajax="false">About</a></li>
                    <li><a href="faq" data-ajax="false">FAQ</a></li>
                    <li><a href="http://belighttea.com/Blogp" data-ajax="false">Blog</a></li>
                    <li><a href="https://sq148.infusionsoft.com/app/orderForms/Belight-Tea#__utmz=utmcsr=fiverr.com|utmcmd=referral|utmctr=-|utmcct=%2Fusers%2Fpaulie222%2Fmanage_orders%2Ffo73fd5d5b06|utmccn=referral|utmgclid=-" data-ajax="false">Buy</a></li>
                    <li><a href="contact" data-ajax="false">Contact</a></li>
                    <li><a href="http://belighttea.com/?site=full" data-ajax="false">Desktop Site</a></li>
                </ul>

                <div id="social_icons">
                    <p><b><u>Follow us: </u></b></p>
                    <a href="https://www.facebook.com/BelightTea"><div id="facebook" class="icon"></div></a>
                </div>

            </div><!-- /panel -->

            <div data-role="header" id="header" data-position="fixed">
                <a href="#mypanel" class="mymenu"></a>
                <?php
                if($pageTitle == "Home"){
                    echo '<img src="images/logo.png" width="125" />';
                }else{
                    echo "<h1>" . $pageTitle . "</h1>";
                } ?>
                <a href="#top" data-ajax="false" class="to-top bookmark" data-iconpos="top" style="margin-top: -0.5em;">Top</a>
            </div><!-- /header -->

            <div data-role="content">