<?php
include("masters/master.php");
include("php/index.php");
?>
<script>
$(document).ready(function(){
$('#myCarousel').carousel({
  interval: 1000 * 2
});
});
</script>
<div style='font-style:italic;margin:15px 0;font-size:20px;'>
<?php if(isset($toptext)) {echo $toptext;} ?>
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
      <?php if (isset($datatarget)) {echo $datatarget;} ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      <?php if (isset($carouselimage)) {echo $carouselimage;} ?>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php
include("masters/footer.php");
?>