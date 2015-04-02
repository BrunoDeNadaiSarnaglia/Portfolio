<!DOCTYPE HTML>
<!--
	MegaCorp by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <?php
    include 'load_xml.php';
    $project_name = explode("=",$_SERVER['QUERY_STRING']);
    ?>
    <title><?php echo $project_name[1]?> | Bruno De Nadai Sarnaglia</title>
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
<body>
<script type="text/javascript">
    function openFile(file_path){
        url = 'https://subversion.ews.illinois.edu/svn/fa14-cs242/mdeoliv2/' + file_path;
        var win = window.open(url, '_blank');
        win.focus();
    };
</script>
<!-- Header -->
<div id="header-wrapper">

    <div id="header" class="container">

        <div id="logo"><h1><a href="#"> Bruno De Nadai Sarnaglia > projects > <?php echo $project_name[1]?></a></a></a></h1></div>
        <nav id="nav">
            <ul>
                <li><a href="index.php"><span class="fa fa-home"> Home</a></li>
            </ul>
        </nav>

    </div>

</div>
<!-- Header Ends Here -->

<!-- Page -->
<?php
foreach ($assignment_array as $assignment) {
    if($assignment->name == $project_name[1]){ // this is the project
        $project = $assignment;
        break;
    }
}
?>

<div id="page">
    <div class="container">
        <div class="row">

            <div id="content" class="12u skel-cell-important">
                <article>
                    <header>
                        <h2 class="main-title"><?php echo $project->name?></h2><br>
                        <h2>by <?php echo $project->author?></h2>
                        <h2>last commit: <?php echo $project->date?></h2>
                        <h2>Revision:  <?php echo $project->revision?></h2>
                    </header>
                    <table class="tg">
                        <tr><th class="tg-o2w9">Name</th>
                            <th class="tg-bsv2">Size</th>
                            <th class="tg-bsv2">Revision</th>
                            <th class="tg-bsv2">Author</th>
                            <th class="tg-bsv2">Date</th>
                            <th class="tg-bsv2">Type</th>
                            <th class="tg-bsv2">Path</th></tr>
                        <?php
                        foreach ($project->list_files as $file) {
                            echo '<tr>';
                            echo '<td class="tg-031e">' . '<a href="javascript:;" onClick="openFile(\'' . $file->entire_path . '\');">' . $file->entire_path. '</a> ' . '</td>';
                            echo '<td class="tg-031e">' . $file->size . '</td>';
                            echo '<td class="tg-031e">' . $file->revision . '</td>';
                            echo '<td class="tg-031e">' . $file->author . '</td>';
                            echo '<td class="tg-031e">' . $file->date . '</td>';
                            echo '<td class="tg-031e">' . $file->extension . '</td>';
                            echo '<td class="tg-031e">' . $file->entire_path . '</td>';
                            echo '</tr>';
                        }
                        ?>

                    </table>
                    <!-- </ul> -->
                </article>
            </div>
        </div>
    </div>
</div>

<!-- /Page -->

<!-- Copyright -->
<div id="copyright" class="container">
    Design adapted from: <a href="http://templated.co">TEMPLATED</a>
</div>


</body>
</html>
