<?php include 'connection.php';

extract($_GET);
 ?>

<!-- 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="admin_managemember.php">manage members</a>
	<a href="admin_viewsuppliers.php"> view suppliers</a>
	<a href="admin_viewrequest.php">view member request</a>
	<a href="admin_viewsrequest.php">view supplier request</a>
	<a href="admin_viewcomplaint.php">view complaint</a>
	<a href="donation_login.php">logout</a>
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>Food donation</title>
   
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="assets/vendors/animate/animate.css">

    <!-- Bootstrap + FoodHut main styles -->
    <link rel="stylesheet" href="assets/css/foodhut.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- Navbar -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="admin_home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_managemember.php">manage member</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_viewsuppliers.php">view suppliers</a>
        
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_viewrequest.php">view member request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_viewsrequest.php">view supplier request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_viewcomplaint.php">view complaint</a>
        
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="donation_login.php">logout</a>
        
                </li>
            </ul>
        </div>
    </nav>
        

