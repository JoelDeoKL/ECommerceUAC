<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="public/themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="public/themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="public/themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="public/themes/less/bootshop.less">
	<script src="public/themes/js/less.js" type="text/javascript"></script> -->

<!-- Bootstrap style -->
    <link id="callCss" rel="stylesheet" href="public/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="public/themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->
	<link href="public/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="public/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->
	<link href="public/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="public/themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="public/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="public/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="public/themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span4">Welcome!<strong> User</strong></div>
	<div class="span6">
	<div class="pull-right">
		<a href="product_summary.php"><span class="">Fr</span></a>
		<a href="product_summary.php"><span class="">Es</span></a>
		<span class="btn btn-mini">En</span>
		<a href="product_summary.php"><span>&pound;</span></a>
		<span class="btn btn-mini">$155.00</span>
		<a href="product_summary.php"><span class="">$</span></a>
		<a href="product_summary.php"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a>
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.php"><img src="public/themes/images/logoUAC.jpg" width="20%" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.php" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>CLOTHES </option>
			<option>FOOD AND BEVERAGES </option>
			<option>HEALTH & BEAUTY </option>
			<option>SPORTS & LEISURE </option>
			<option>BOOKS & ENTERTAINMENTS </option>
		</select>
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="special_offer.php">Specials Offer</a></li>
	 <li class=""><a href="normal.php">Delivery</a></li>
	 <li class=""><a href="contact.php">Contact</a></li>

        <?php
        if(isset($_SESSION["nom"])){
            ?>
            <a href="index.php?kay=x-users.inscription" role="button" style="padding-right:0"><span class="btn btn-large btn-success">Panier</span></a>
            <a href="index.php?kay=x-users.deconnexion" role="button"  style="padding-right:0"><span class="btn btn-large btn-success">Deconnexion(<?= $_SESSION["nom"];?>)</span></a>
            <?php
        }else{
            ?>
            <a href="index.php?kay=x-users.inscription" role="button" style="padding-right:0"><span class="btn btn-large btn-success">Register</span></a>
            <a href="index.php?kay=x-users.connect" role="button"  style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
            <?php
        }
        ?>
	</li>
    </ul>
  </div>
</div>
</div>
</div>

