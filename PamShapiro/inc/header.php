<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable=0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/theme.css" />
        <link rel="stylesheet" href="css/structure.css" />
        <link rel="stylesheet" href="css/form.css" />

        <title><?php echo $pageTitle ?></title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        
        <!-- Bootstrap Lightbox TouchTouch CSS -->
        <link rel="stylesheet" href="css/touchTouch.css" />

        <!-- Custom styles for this template -->
        <link href="css/jumbotron.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <style>
            .btn{background: #333; color: #fff;}

            .btn-info{border-color: #000;}

            .navbar{
                background: #ffffff; /* Old browsers */
                background: -moz-linear-gradient(top,  #ffffff 0%, #cccccc 100%); /* FF3.6+ */
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#cccccc)); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(top,  #ffffff 0%,#cccccc 100%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(top,  #ffffff 0%,#cccccc 100%); /* Opera 11.10+ */
                background: -ms-linear-gradient(top,  #ffffff 0%,#cccccc 100%); /* IE10+ */
                background: linear-gradient(to bottom,  #ffffff 0%,#cccccc 100%); /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#cccccc',GradientType=0 ); /* IE6-9 */

            }
        </style>
    </head>

    <body>

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="images/logo.png" /></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">Home</a></li>
                        <li><a href="about">About</a></li>
                        <li><a href="services">Services</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Photo Galleries <b class="caret"></b></a>
                            <ul class="dropdown-menu pull">
                                <li><a href="commercial">Commercial</a></li>
                                <li><a href="portrait">Portrait</a></li>
                                <li><a href="school">School</a></li>
                                <li><a href="wedding">Wedding</a></li>
                            </ul>
                        </li>
                        <li><a href="contact">Contact Us</a></li>
                        <li><a href="http://pamshapirophotography.com/clients/index.php">Client Login</a></li>
                        <li><a href="http://pamshapirophotography.com/?site=full">Desktop Site</a></li>
                    </ul>
                </div><!--/.navbar-collapse -->
            </div>
        </div>