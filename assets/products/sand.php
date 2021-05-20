<?php require "products-header.php" ?>
<?php
echo "dnt knw";
  if(isset( $_REQUEST['id']))
  $id =htmlentities( $_REQUEST['id']);
  echo $id;
?>
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products - Sand paintings</h2>
          <p>The skill of sand painting is the ability to pour sand or other colored pigments gathered from various sources to create a fixed or unfixed form of artwork.Sand Painting has various forms, but the art form that is majorly practiced and known by the population is the quick stokes on sand poured on a given surface to create illustrations that are not permanent and can be changed according to the artist.It is very unique than the others. It requires a lot of patience and can be taxing to do.</p>
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
              <img src="../../assets/img/sand/sand-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Birds</h4>
                <p>Sand Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/sand/sand-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tiger"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/sand/sand-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Music Together</h4>
                <p>Sand Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/sand/sand-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Together"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/sand/sand-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Water Bridge</h4>
                <p>Sand Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/sand/sand-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bulb"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/sand/sand-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Casual Music Play</h4>
                <p>Sand Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/sand/sand-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Water Drops"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/sand/sand-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Desert Scene</h4>
                <p>Sand Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/sand/sand-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lock"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/sand/sand-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bird</h4>
                <p>Sand Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/sand/sand-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Landscape"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/sand/sand-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Desert</h4>
                <p>Sand Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/sand/sand-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Raw Peanut"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/sand/sand-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Horse</h4>
                <p>Sand Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/sand/sand-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Girl portrait"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        

      </div>
    </section><!-- End Portfolio Section -->
<?php require "products-footer.php" ?>