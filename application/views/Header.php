<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SMART CITY </title>
    <meta name="description" content="">
    <meta name="author" content="Swift">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>source/bootstrap-3.3.6-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>source/font-awesome-4.5.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style/slider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style/mystyle.css">
</head>
<body>
<!-- Header -->
<div class="allcontain">
    <div class="header">
            
            <ul class="givusacall">
                <li> </li>
            </ul>
            
    </div>
    <!-- Navbar Up -->
    <nav class="topnavbar navbar-default topnav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
                    <span class="sr-only"> Toggle navigaion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="#"><img src="<?php echo base_url() ?>img/logo.png" height="50px" alt="logo"></a>
            </div>   
        </div>
        <div class="collapse navbar-collapse" id="upmenu">
            <ul class="nav navbar-nav" id="navbarontop">
                <li class="active"><a href="<?php echo base_url() . 'index.php'; ?>">Home</a> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Devices
                     <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdowncostume">
                        <li><a href="<?php echo base_url() . 'index.php/devices'; ?>">My Devices </a></li>
                        <li><a href="<?php echo base_url() . 'index.php/devices/addDevice'; ?>">Add new Device</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/devices/addSensor'; ?>">Add sensor</a></li>
                    </ul>
                </li>
                <li class="active">
                        <a href="<?php echo base_url() . 'index.php/map'; ?>" class="active">MAP<span class=""></span></a>
                </li>
                <li class="active">
                        <a href="<?php echo base_url() . 'index.php/users/account'; ?>#" class="active">PROFILE <span class=""></span></a>
                        
                            
                </li>
                <li>
                    <!-- <a href="contact.html"></a> -->
 
                </li>
                 <button><span class="logout"><a href="<?php echo  base_url();?>index.php/users/logout">LOG OUT</a></span></button>
            </ul>
        </div>
    </nav>
</div>