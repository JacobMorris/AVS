<?php
include("masters/master.php");
include("php/resources-edit.php");
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
<h2>AVS Resources Management - <?php if(isset($currreso)) {echo $currreso;} ?>:</h2>
</div>
</div>
<div class='row'>
<div class='col-xs-12 text-center' style='color:red;'>
<?php if(isset($error)){echo $error;} ?>
</div>
</div>
<div class='row'>
   <div class='col-sm-12 col-md-3 col-md-push-3'>
       Text:
   </div>
   <div class='col-sm-12 col-md-5 col-md-push-1'>
      <input type='text' name='resourcetext' value='<?php if(isset($currresotext)) {echo $currresotext;} ?>' class='form-control' />
   </div>
</div>
<div class='row'>
   <div class='col-sm-12 col-md-3 col-md-push-3'>
       Link:
   </div>
   <div class='col-sm-12 col-md-5 col-md-push-1'>
      <input type='text' name='resourcelink' class='form-control' value='<?php if(isset($currresolink)) {echo $currresolink;} ?>' />
   </div>
</div>
<div class='row'>
   <div class='col-xs-12 col-md-2 col-md-push-3 marginbutton'>
   <?php if(isset($delete)){echo $delete;} ?>
   </div>
   <div class='col-xs-12 col-md-2 col-md-push-3 marginbutton'>
   <a href='resources.php'><input type='button' name='cancel' value='cancel' class='btn' /></a>
   </div>
   <div class='col-xs-12 col-md-2 col-md-push-3'>
   <input type='submit' name='submit' value='submit' class='btn btn-success' />
   </div>
</div>
<?php
include("masters/footer.php");
?>