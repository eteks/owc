<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" class="ihome">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>One-World Chemistry</title>
    <link href="css/jquery-ui-1.10.3.custom.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/blue.css" id="style-switch" />
    <!--[if IE 9]> <link rel="stylesheet" type="text/css" href="css/ie9.css"/><![endif]-->
    <link rel="shortcut icon" type="image/x-icon" href="images/fevicon.ico"> <!--favicon-->
    <link rel="stylesheet" type="text/css" href="css/inline.min.css" />
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
</head>

<body>
    <div id="loader-overlay"><img src="images/loader.gif" alt="Loading" /></div>
    <header>
        <div class="header-bg">
            <div id="headerstic">
                <div class="top-bar container">
                    <div class="container">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="row">
                                <div class="logo_with_content">
                                    <a href="index.php"><img src="images/imed-logos-sm.png" height="auto" width="158" class="logo_chem" /></a>
                                    <!-- <p class="logo_subtitle hidden-sm hidden-xs">Systems thinking to shape the chemical sciences for sustainable development</p><p class="logo_subtitle_under hidden-sm hidden-xs">An initiative of the International Organization for Chemical Sciences in Development</p>-->
                                    <h1 class="logo_subtitle_under">ONE-WORLD CHEMISTRY</h1>
                                    <h2 class="logo_subtitle">Systems thinking to shape the chemical sciences for sustainable development</h2>
                                    <h3 class="logo_subtitle_under hidden-xs">An initiative of the International Organization for Chemical Sciences in Development</h3>
                                    <div class="navbar-header hidden-md hidden-lg">
                                        <button type="button" class="navbar-toggle icon-list-ul" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> </button>
                                    </div>
                                </div>
                                <div style="clear:both;"> </div>
                                <div class="collapse navbar-collapse no-pad nav_center " id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav navbar-right no-margin">
                                        <li class="dropdown dropdown_act <?php if(basename($_SERVER['PHP_SELF'])=='index.php' || basename($_SERVER['PHP_SELF'])=='sitemap.php') echo " active "; ?>">
                                            <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" target="_blank"> <i class="fa fa-home hidden-xs hidden-md" aria-hidden="true"></i> Home<b class="icon-angle-down"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="sitemap.php">Sitemap</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown_act <?php if(basename($_SERVER['PHP_SELF'])=='vision.php' || basename($_SERVER['PHP_SELF'])=='need.php'|| basename($_SERVER['PHP_SELF'])=='origins.php' || basename($_SERVER['PHP_SELF'])=='about.php') echo " active "; ?>"><a href="vision.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog hidden-xs hidden-md" aria-hidden="true"></i> About OWC<b class="icon-angle-down"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="vision.php">Vision</a></li>
                                                <li><a href="need.php">Need for a Unified Approach</a></li>
                                                <li><a href="origins.php">Origins of One-World Chemistry</a></li>
                                                <li><a href="about.php">About the Originators of One-World Chemistry </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown_act <?php if(basename($_SERVER['PHP_SELF'])=='century.php' || basename($_SERVER['PHP_SELF'])=='sustainable.php'|| basename($_SERVER['PHP_SELF'])=='unsustainable.php' ) echo " active "; ?>"><a href="century.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text hidden-xs hidden-md" aria-hidden="true"></i> Sustainable Development<b class="icon-angle-down"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="century.php">21<sup>st</sup> Century Challenges</a></li>
                                                <li><a href="sustainable.php">Sustainable Development</a></li>
                                                <li><a href="unsustainable.php">The UN Sustainable Development Goals </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown_act <?php if(basename($_SERVER['PHP_SELF'])=='system.php' || basename($_SERVER['PHP_SELF'])=='cross.php') echo " active "; ?>"><a href="system.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lightbulb-o hidden-xs hidden-md" aria-hidden="true"></i> Systems Thinking<b class="icon-angle-down"></b></a>
                                            <ul class="dropdown-menu">
                                                <li class="hidden-xs hidden-sm"><a href="system.php">The Need for Systems Thinking in the <br>Chemical Sciences</a></li>
                                                <li class="hidden-md hidden-lg"><a href="system.php">The Need for Systems Thinking in the Chemical Sciences</a></li>
                                                <li><a href="cross.php">Cross-disciplinary Approaches</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown_act <?php if(basename($_SERVER['PHP_SELF'])=='historic.php' || basename($_SERVER['PHP_SELF'])=='innovation.php'|| basename($_SERVER['PHP_SELF'])=='education.php' || basename($_SERVER['PHP_SELF'])=='ethical.php'|| basename($_SERVER['PHP_SELF'])=='global.php') echo " active "; ?>"><a href="historic.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-pencil hidden-xs hidden-md" aria-hidden="true"></i> OWC: What the Chemical Sciences Can Do<b class="icon-angle-down"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="historic.php">Chemistry’s Historic Contributions</a></li>
                                                <li><a href="innovation.php">Innovation</a></li>
                                                <li><a href="education.php">Chemistry Education</a></li>
                                                <li><a href="ethical.php">Ethical Science</a></li>
                                                <li><a href="global.php">A Global Action Plan </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown_act <?php if(basename($_SERVER['PHP_SELF'])=='literature.php' ) echo " active "; ?>"><a href="literature.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book hidden-xs hidden-md" aria-hidden="true"></i> Resources<b class="icon-angle-down"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="literature.php">Literature Resources</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown_act <?php if(basename($_SERVER['PHP_SELF'])=='contact.php' || basename($_SERVER['PHP_SELF'])=='iocd.php' ) echo " active "; ?>"><a href="contact.php" class="dropdown-toggle" id="scroll_contact" data-toggle="dropdown"><i class="fa fa-envelope hidden-xs hidden-md" aria-hidden="true"></i> Contact Us<b class="icon-angle-down"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="contact.php">Contact OWC</a></li>
                                                <li><a href="iocd.php">IOCD</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div style="clear:both"> </div>