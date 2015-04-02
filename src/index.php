<!DOCTYPE HTML>
<!--
	MegaCorp by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>Portifolio | Bruno De Nadai Sarnaglia</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel-noscript.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-desktop.css" />
    </noscript>
</head>
    <body class="homepage">

        <!-- Header -->
        <div id="header-wrapper">

            <div id="header" class="container">

                <div id="logo">
                    <h1>
                        <a href="#">
                            Bruno De Nadai Sarnaglia > projects
                        </a>
                    </h1>
                </div>
            </div>
        </div>
        <!-- Header Ends Here -->

        <!-- Featured Area -->
        <div id="featured-wrapper">

            <div class="container">
                <div class="row double">
                    <?php
                    include 'load_xml.php';

                    foreach ($assignment_array as $assignmet) {
                        echo '<section class="4u">';
                        echo '<h2>' . $assignmet->name . '</h2>';
                        echo '<a href="assignment_page.php?project=' . $assignmet->name . '"class="button button-style1"><span class="fa fa-folder-o"> Open project</a>';
                        echo '</section>';
                    }
                    ?>
                </div>
            </div>

        </div>
    <!-- Featured Ends Here -->

    <!-- Copyright -->
        <div id="copyright" class="container">
            Design adapted from: <a href="http://templated.co">TEMPLATED</a>
        </div>


    </body>
</html>
