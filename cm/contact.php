<?php
include("masters/master.php");
include("php/contact.php");
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
<h2>AVS Contact Us Management:</h2>
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
      <textarea name='contacttext' style='height:300px;' class='form-control'><?php if(isset($context)) {echo $context;} ?></textarea>
   </div>
</div>
<div class='row'>
   <div class='col-xs-12 col-md-2 col-md-push-3 marginbutton'>
   &nbsp;
   </div>
   <div class='col-xs-12 col-md-2 col-md-push-3 marginbutton'>
   <a href='index.php'><input type='button' name='cancel' value='cancel' class='btn' /></a>
   </div>
   <div class='col-xs-12 col-md-2 col-md-push-3'>
   <input type='submit' name='submit' value='submit' class='btn btn-success' />
   </div>
</div>
<?php
include("masters/footer.php");
?>