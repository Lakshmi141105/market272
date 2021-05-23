<?php require "products-header.php" ?>
<?php
if(isset($_COOKIE['userid']))
$id=$_COOKIE['userid'];
//$id =htmlentities( $_REQUEST['id']);
?>
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products - Acrylic paintings</h2>
          <p>Acrylics are affordable, making them ideal for covering large areas with paint. Because these paints are opaque and fast drying, they can be very forgiving, allowing you to cover up mistakes with more paint.</p>
        </div>
        <?php

if(isset($id) && $id!="")
{?>
  <?php require "ratingreview.php" ?>
  <?php
}
 ?>  
             <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/acrylic/painting-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Moonlight</h4>
                <p>Acrylic Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/acrylic/painting-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Moonlight"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/acrylic/painting-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sunrise</h4>
                <p>Acrylic Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/acrylic/painting-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sunrise"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/acrylic/painting-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Abstract portrait</h4>
                <p>Acrylic Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/acrylic/painting-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Abstract portrait"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/acrylic/painting-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sea shore</h4>
                <p>Acrylic Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/acrylic/painting-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sea shore"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/acrylic/painting-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bird</h4>
                <p>Acrylic Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/acrylic/painting-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bird"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/acrylic/painting-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Nature</h4>
                <p>Acrylic Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/acrylic/painting-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Nature"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/acrylic/painting-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Beach</h4>
                <p>Acrylic Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/acrylic/painting-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Beach"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/acrylic/painting-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Vintage car View</h4>
                <p>Acrylic Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/acrylic/painting-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Vintage car"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/acrylic/painting-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Tiger</h4>
                <p>Acrylic Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/acrylic/painting-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tiger"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
<?php require "products-footer.php" ?>