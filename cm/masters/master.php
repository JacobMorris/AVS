<?php
// Start the session
session_start();
if(!(isset($_SESSION["user"]))){
   echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
}

include("../phpfunctions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='shortcut icon' type='image/x-icon' href='../../images/AVS-icon.ico'/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AVS Content Manager</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
.list-group-item{
background-color:black;
color:white;
}
</style>
</head>

<body>
<form action='' method='post' enctype="multipart/form-data">
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="http://www.avs-in.com">
                        Back to Public Site
                    </a>
                </li>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a data-toggle="collapse" href="#pages">&nbsp;&nbsp;Pages</a>
                </li>
                <div id="pages" class="panel-collapse collapse">
                    <ul class="list-group">
                       <li class="list-group-item">
                          <a href="clients.php">Clients</a>
                       </li>
                       <li class="list-group-item">
                          <a href="resources.php">Resources</a>
                       </li>
                       <li class="list-group-item">
                          <a href="services.php">Services</a>
                       </li>
                       <li class="list-group-item">
                          <a href="solutions.php">Solutions</a>
                       </li>
                       <li class="list-group-item">
                          <a href="contact.php">Contact</a>
                       </li>
                    </ul>
                </div>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
<a href="#menu-toggle" class="btn btn-default visible-xs visible-sm" id="menu-toggle">Menu</a>