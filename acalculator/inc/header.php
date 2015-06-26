<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $pageTitle; ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/acalculator.css" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile.structure-1.3.2.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>

        <script>
  $(document).on('change','.calc', function(event){
    if ($(event.target).val()!='') {
      window.location.href=$(event.target).val();
    }
  });
        </script>

    </head>
    <body>

        <div data-role="page" style="background: #fff;" data-theme="a">

            <div data-role="panel" id="panel">
                <div style="width: 100%; text-align: center;">
                    <img src="img/logo.png" />
                    <a href="tel:8003330888" data-role="button">Call Us</a>
                </div>

                <ul data-role="listview" data-theme="a" data-inset="true">
                    <li><a href="/">Home</a></li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="services">Services</a></li>
                    <li data-role="list-divider" style="background: #333; color: #fff; text-shadow: 0 0px 0!important;">More Services</li>
                    <li><a href="free-calcs">Free Calculators</a></li>
                    <li><a href="white-label">White Label</a></li>
                    <li data-role="list-divider" style="background: #333; color: #fff; text-shadow: 0 0px 0!important;"></li>
                    <li><a href="calcs">Calculators</a></li>
                    <li><a href="http://www.acalculator.com/blog.html">Blog</a></li>
                    <li><a href="contact">Contact</a></li>
                    <li><a href="http://www.acalculator.com/?site=full">Desktop Site</a></li>
                </ul>

            </div><!-- /panel -->

            <div data-role="header" data-theme="a" data-position="fixed">
                <h1><?php echo $pageTitle ?></h1>
                <a href="#panel" class="home"></a>
                <?php
                if ($top) {
                    echo '<a href="#top" class="to-top" data-ajax="false" data-iconpos="top"></a>';
                }
                ?>
            </div><!-- /header -->

            <div data-role="content">