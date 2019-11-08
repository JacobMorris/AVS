<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
<link rel='shortcut icon' type='image/x-icon' href='../images/AVS-icon.ico'/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AVS Content Manager</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php
include("php/login.php");
?>
<body>
<form action="" method="post">
<style>
.row{
margin-bottom:10px;
}
@media (max-width: 991px) {
    .text-right{
text-align:left !important;
}
}
</style>
<div class='container'>
   <div class='row'>
      <div class='col-xs-12 text-center'>
            <h1>AVS Content Management Login:</h1>
      </div>
   </div>
   <div class='row'>
      <div class='col-xs-12 text-center'>
         <?php if(isset($error)){echo $error;} ?>
      </div>
   </div>
   <div class='row'>
      <div class='col-xs-12 col-md-5 text-right'>
         Username:
      </div>
      <div class='col-xs-12 col-md-3'>
         <input type='text' name='username' class='form-control' />
      </div>
   </div>
   <div class='row'>
      <div class='col-xs-12 col-md-5 text-right'>
         Password:
      </div>
      <div class='col-xs-12 col-md-3'>
         <input type='password' name='password' class='form-control' />
      </div>
   </div>
   <div class='row'>
      <div class='col-xs-12 text-center'>
          <input type='submit' value='Log in' />
      </div>
   </div>
</div>
</form>
</body>

</html>