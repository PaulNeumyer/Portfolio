<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $pageTitle; ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
        <script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>

        <script>
            $(document).on('change', '.calc', function(event) {
                if ($(event.target).val() != '') {
                    window.location.href = $(event.target).val();
                }
            });
        </script>

    </head>
    <body>

        <div data-role="page">

            <div data-role="panel" id="mypanel">

                <ul data-role="listview" data-theme="a">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="http://www.nimbitmusic.com/jookebox">Music</a></li>
                    <li><a href="reviews.php">Reviews</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="http://4gsurf.com/wp1/h-o-m-e/?site=full">Desktop Site</a></li>
                </ul>

                <div id="social_icons">
                    <p><b><u>Follow us: </u></b></p>
                    <a href="https://www.facebook.com/Sologig"><div id="facebook" class="icon"></div></a>
                    <a href="https://myspace.com/sologig"><div id="myspace" class="icon"></div></a>
                </div>

            </div><!-- /panel -->

            <div data-role="header" data-theme="a" data-position="fixed">
                <h1><?php echo $pageTitle ?></h1>
                <a href="#mypanel" class="home"></a>
                <!--<a href="Skype.ui();" id="SkypeButton_Call_etarist_1" class="skype">-->
                    <script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
                    <div id="SkypeButton_Call_etarist_1" class="skype" style="margin: -3.25em -1em 0 0;">
                        <script type="text/javascript">
                            Skype.ui({
                                "name": "call",
                                "element": "SkypeButton_Call_etarist_1",
                                "participants": ["etarist"],
                                "imageSize": 32
                            });
                        </script>
                    </div>
                </a>
            </div><!-- /header -->

            <div data-role="content">