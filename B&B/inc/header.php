<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $pageTitle ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable="no">
              <link rel="stylesheet" href="nc/slider/css/example.css">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
        <link rel="stylesheet" href="css/B.css" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile.structure-1.3.2.min.css" /> 
        <link rel="stylesheet" href="css/main.css" />        
        <link rel="stylesheet" href="inc/slider/css/font-awesome.min.css">

        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
    </head>
    <body>

        <div data-role="page" data-theme="a">

            <div data-role="panel" id="mypanel" data-display="push" data-position="left">

                <div class="panel_logo">

                </div>
                <ul data-role="listview" data-inset="false">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="rooms.php">Our Rooms</a></li>
                </ul>
                <div data-role="collapsible-set" data-theme="b" data-content-theme="b" data-inset="false">
                    <div data-role="collapsible">
                        <h2>Availability and Pricing</h2>

                        <ul data-role="listview">

                            <li><a href="booking.php">Check Availability</a></li>
                            <li><a href="breakfast.php">Breakfast</a></li>
                            <li><a href="prices.php">Prices</a></li>
                            <li><a href="xmas.php">Xmas</a></li>
                            <li><a href="birthdays.php">Birthdays & Anniversaries</a></li>
                            <li><a href="valentines.php">Valentines</a></li>
                            <li><a href="easter.php">Easter</a></li>
                            <li><a href="bank-holidays.php">Bank Holidays</a></li>
                            <li><a href="festival-of-speed.php">Goodwood Festival of Speed</a></li>
                            <li><a href="glorious.php">Glorious Goodwood</a></li>
                            <li><a href="vintage.php">Goodwood Vintage</a></li>
                            <li><a href="revival.php">Goodwood Revival</a></li>

                        </ul>
                    </div>

                    <div data-role="collapsible" style="padding-bottom: 0.5em;">
                        <h2>Contact and Reviews</h2>

                        <ul data-role="listview">

                            <li><a href="contact.php">Contact Details</a></li>
                            <li><a href="terms.php">Booking Terms</a></li>
                            <li><a href="http://www.chichester-bed-breakfast.co.uk/attractions.aspx">Location Info</a></li>
                            <li><a href="http://www.chichester-bed-breakfast.co.uk/guestbook.aspx">Guest Reviews</a></li>
                            <li><a href="http://www.chichester-bed-breakfast.co.uk/blog.aspx">Blog</a></li>
                        </ul>
                    </div>
                </div>

                <ul data-role="listview" data-inset="false">
                    <li><a href="http://www.chichester-bed-breakfast.co.uk/gallery.aspx">Photo Gallery</a></li>
                    <li><a href="http://www.chichester-bed-breakfast.co.uk/offers.aspx">Special Offers</a></li>
                </ul>

            </div><!-- /panel -->

                <?php
                if ($pageTitle == "Home") {
                    echo'<div data-role="header" id="header" data-position="fixed">';
                    echo '<a href="#mypanel" class="mymenu"></a>';
                    echo '<h1 id="title">The Best Beds in the South at the Bosham B&B</h1>';
                } else {
                    echo '<div data-role="header" data-position="fixed">';
                    echo '<a href="#mypanel" class="mymenu"></a>';
                    echo '<h1>' . $pageTitle . '</h1>';
                }
                ?>
                <a href="#top" data-ajax="false" class="to-top bookmark" data-iconpos="top" style="color: #fff; margin-top: -0.6em;">Top</a>
            </div><!-- /header -->

            <div data-role="content">