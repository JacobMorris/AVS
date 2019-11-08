<?php
include("masters/master.php");
include("php/clients-edit.php");
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
<h2>AVS Clients Management - <?php if(isset($currclie)) {echo $currclie;} ?>:</h2>
</div>
</div>
<div class='row'>
<div class='col-xs-12 text-center' style='color:red;'>
<?php if(isset($error)){echo $error;} ?>
</div>
</div>
<?php if(!isset($currclietitle)) : ?>
<div class='row'>
   <div class='col-sm-12 col-md-3 col-md-push-3'>
      Image Upload:
   </div>
   <div class='col-sm-12 col-md-9 col-md-push-3'>
      <input type="file" name="clientimage">
   </div>
</div>
<?php endif; ?>
<div class='row'>
   <div class='col-sm-12 col-md-3 col-md-push-3'>
       County Name:
   </div>
   <div class='col-sm-12 col-md-5 col-md-push-1'>
      <input type='text' name='clienttitle' value='<?php if(isset($currclietitle)) {echo $currclietitle;} ?>' class='form-control' />
   </div>
</div>
<div class='row'>
   <div class='col-sm-12 col-md-3 col-md-push-3'>
       Link:
   </div>
   <div class='col-sm-12 col-md-5 col-md-push-1'>
      <input type='text' name='clientlink' class='form-control' value='<?php if(isset($currclielink)) {echo $currclielink;} ?>' />
   </div>
</div>
<div class='row'>
   <div class='col-xs-12 col-md-2 col-md-push-3 marginbutton'>
   <?php if(isset($delete)){echo $delete;} ?>
   </div>
   <div class='col-xs-12 col-md-2 col-md-push-3 marginbutton'>
   <a href='clients.php'><input type='button' name='cancel' value='cancel' class='btn' /></a>
   </div>
   <div class='col-xs-12 col-md-2 col-md-push-3'>
   <input type='submit' name='submit' value='submit' class='btn btn-success' />
   </div>
</div>
<?php
include("masters/footer.php");
?>