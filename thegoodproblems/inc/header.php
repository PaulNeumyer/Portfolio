<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $pageTitle; ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>

        <link rel="stylesheet" href="css/main.css" />
        <link href="css/structure.css" rel="stylesheet">
        <link href="css/form.css" rel="stylesheet">
        <script src="scripts/wufoo.js"></script>
    </head>
    <body>

        <div data-role="page">

            <div data-role="header" data-position="fixed">
                <a href="#mypanel" data-role="button" data-inline="true">Menu</a>
                <h1><?php echo $pageTitle; ?></h1>
            </div>
            <!-- /header -->

            <div data-role="panel" id="mypanel" data-position="left" data-position-fixed="true" data-theme="d">

                <ul data-role="listview" data-theme="a">
                    <li><a href="index" data-transition="none">Home</a></li>
                    <li><a href="tattoos" data-transition="none">Tattoos</a></li>
                    <li><a href="flyers" data-transition="none">Flyers</a></li>
                    <li><a href="designs" data-transition="none">Designs</a></li>
                    <li><a href="contact" data-transition="none">Contact Us</a></li>
                    <li><a href="http://www.thegoodproblems.com/?site=full">Desktop Site</a></li>
                    <img src="images/logo.jpg" style="width: 100%;"/>
                </ul>

            </div><!-- /panel -->
            
            <div data-role="content">
                <div class="wrapper">