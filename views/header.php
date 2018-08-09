<?php

if(!isset($_GET['is_home'])) {
    $_GET['is_home'] = false;
}

$root_url = ''; # 'http://localhost/ShieldTheme/';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SHIELD - Free Bootstrap 3 Theme">
    <meta name="author" content="Carlos Alvarez - Alvarez.is - blacktie.co">
<!--    <link rel="shortcut icon" href="assets/ico/favicon.png">-->
    <link href="assets/img/favicon.ico" rel="icon" type="image/x-icon" />

    <title>PiCanvas | Heaven of Canvas Frame</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link href="assets/css/animate-custom.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">



    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-offset="0" data-target="#navbar-main">


<div id="navbar-main">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span style="font-size:18px; color:#fff;">Menu</span>
                </button>
                <a class="navbar-brand hidden-xs hidden-sm" href="<?php echo $root_url . 'index.php' ?>" data-target="headerwrap" onclick="return false;">
<!--                    <span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span>-->
                    <span style="color: #3498db;;font-weight: bold;">Pi Canvas</span>
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li> <a href="<?php echo $root_url . 'index.php' ?>" data-target="headerwrap" id="menu-home"> Home</a></li>
                    <li> <a href="<?php echo $root_url . 'about.php' ?>" data-target="about" class="">About</a></li>
                    <li> <a href="<?php echo $root_url . 'picanvas.php' ?>" data-target="picanvas" class="">Pi Canvas</a></li>
                    <li> <a href="<?php echo $root_url . 'meet-us.php' ?>" data-target="meet-us" class="">Meet Us</a></li>
                    <li> <a href="<?php echo $root_url . 'terms-and-conditions.php' ?>" data-target="terms-and-conditions" class="">Terms and Conditions</a></li>
                    <li> <a href="<?php echo $root_url . 'contact-us.php' ?>" data-target="contact-us" id="menu-contact-us" class="">Contact Us</a></li>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
