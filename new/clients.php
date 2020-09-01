
<?php
include("masters/master.php");
?>
  <main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Clients</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Our Clients</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
<?php
include("php/clients.php")
?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

<?php
include("masters/footer.php");
?>
