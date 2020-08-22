<?php
include("masters/master.php");
include("php/index.php");
?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Welcome to <span>Ad Valorem Solutions</span></h2>
          <p class="animated fadeInUp">A satisfied customer is the only true customer</p>
          <a href="services.html" class="btn-get-started animated fadeInUp">Find out what we can do for you</a>
        </div>
      </div>

      <?php if (isset($carouselimage)) {echo $carouselimage;} ?>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
<?php
include("shared/services_component.php");
?>
  </main><!-- End #main -->

<?php
include("masters/footer.php");
?>
