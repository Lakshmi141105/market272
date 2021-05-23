<?php require "products-header.php" ?>
<?php
  if(isset($_COOKIE['userid']))
  $id=$_COOKIE['userid'];
?>
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products - Spray paintings</h2>
          <p>In spray spray, aerosol paint comes out from the pressurized container by controlling it with a valve.In the 1880s, the spraying paint with compressed air was used back in the Southern Pacific Railway.The portion of the surface where a particular color is needed to be applied is kept open, while the other portions are covered.This is done so that the color does not spread to other portions of the painting.</p>
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
              <img src="../../assets/img/spray/spray-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Different environments</h4>
                <p>Spray Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/spray/spray-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tiger"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/spray/spray-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Universe</h4>
                <p>Spray Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/spray/spray-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Together"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/spray/spray-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Flowers</h4>
                <p>Spray Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/spray/spray-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bulb"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/spray/spray-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4> Super Moon</h4>
                <p>Spray Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/spray/spray-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Water Drops"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/spray/spray-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Landscape</h4>
                <p>Spray Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/spray/spray-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lock"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/spray/spray-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Unbelievable Spray</h4>
                <p>Spray Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/spray/spray-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Landscape"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/spray/spray-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Landscape</h4>
                <p>Spray Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/spray/spray-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Raw Peanut"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/spray/spray-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Extra Terrestrial</h4>
                <p>Spray Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/spray/spray-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Girl portrait"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        

      </div>
    </section><!-- End Portfolio Section -->
<?php require "products-footer.php" ?>