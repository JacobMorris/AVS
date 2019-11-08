<?php
include("masters/master.php");
include("php/services-edit.php");
?>
<style>
.row{
margin-bottom:10px;
}
@media (max-width: 991px) {
    .btn{
width:100% !important;
}
}
.marginbutton{
margin-bottom:10px;
}
</style>
<div class='row'>
<div class='col-xs-12 text-center'>
<h2>AVS Services Management - <?php if(isset($currserv)) {echo $currserv;} ?>:</h2>
</div>
</div>
<div class='row'>
<div class='col-xs-12 text-center' style='color:red;'>
<?php if(isset($error)){echo $error;} ?>
</div>
</div>
<div class='row'>
   <div class='col-sm-12 col-md-3 col-md-push-3'>
       Title:
   </div>
   <div class='col-sm-12 col-md-5 col-md-push-1'>
      <input type='text' name='servicetitle' value='<?php if(isset($currservtitle)) {echo $currservtitle;} ?>' class='form-control' />
   </div>
</div>
<div class='row'>
   <div class='col-sm-12 col-md-3 col-md-push-3'>
       Description:
   </div>
   <div class='col-sm-12 col-md-5 col-md-push-1'>
      <textarea name='servicedesc' style='height:300px;' class='form-control'><?php if(isset($currservdesc)) {echo $currservdesc;} ?></textarea>
   </div>
</div>
<div class='row'>
   <div class='col-xs-12 col-md-2 col-md-push-3 marginbutton'>
   <?php if(isset($delete)){echo $delete;} ?>
   </div>
   <div class='col-xs-12 col-md-2 col-md-push-3 marginbutton'>
   <a href='services.php'><input type='button' name='cancel' value='cancel' class='btn' /></a>
   </div>
   <div class='col-xs-12 col-md-2 col-md-push-3'>
   <input type='submit' name='submit' value='submit' class='btn btn-success' />
   </div>
</div>
<?php
include("masters/footer.php");
?>