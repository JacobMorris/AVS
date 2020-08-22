<?php
include("masters/header.php");
?>

  <main id="main">

    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Services</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Our Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Services Section -->

<?php
include("shared/services_component.php");
?>

    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
      <div class="container">

        <div class="row">
<?php
include("php/services.php");
?>
        </div>

      </div>
    </section><!-- End Service Details Section -->

  </main><!-- End #main -->

<?php
include("masters/footer.php");
?>
