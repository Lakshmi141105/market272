<?php require "products-header.php" ?>
<?php
if(isset( $_REQUEST['id']))
$id =htmlentities( $_REQUEST['id']);
?>


<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products - Oil Paintings</h2>
          <p>Oil painting techniques can feel overwhelming. With it's depth of colors it breaths new life into your paintings.</p>
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
              <img src="../../assets/img/oilpaintings/painting-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Radha Krishna</h4>
                <p>Oil Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/oilpaintings/painting-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Radha Krishna"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/oilpaintings/painting-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Spring</h4>
                <p>Oil Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/oilpaintings/painting-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Spring"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/oilpaintings/painting-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Baby Elephant</h4>
                <p>Oil Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/oilpaintings/painting-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Baby Elephant"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/oilpaintings/painting-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Girl in the Rain</h4>
                <p>Oil Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/oilpaintings/painting-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Girl in the Rain"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/oilpaintings/painting-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Temple Scene</h4>
                <p>Oil Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/oilpaintings/painting-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Temple Scene"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/oilpaintings/painting-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Nature</h4>
                <p>Oil Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/oilpaintings/painting-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Nature"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/oilpaintings/painting-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Water Fall</h4>
                <p>Oil Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/oilpaintings/painting-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Water Fall"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/oilpaintings/painting-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Tree View</h4>
                <p>Oil Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/oilpaintings/painting-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tree View"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/oilpaintings/painting-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Stream</h4>
                <p>Oil Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/oilpaintings/painting-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Stream"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

<?php require "products-footer.php" ?>
