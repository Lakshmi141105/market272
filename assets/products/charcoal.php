<?php require "products-header.php" ?>
<?php
  if(isset($_COOKIE['userid']))
  $id=$_COOKIE['userid'];
?>
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products - Charcoal paintings</h2>
          <p>Charcoal drawing is addictive. Maybe it’s because charcoal drawings are so fast and immediate, or maybe because the final look is often so impressive.</p>
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
              <img src="../../assets/img/charcoal/painting-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Tiger</h4>
                <p>Charcoal Drawing</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/charcoal/painting-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tiger"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/charcoal/painting-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Together</h4>
                <p>Oil Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/charcoal/painting-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Together"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/charcoal/painting-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bulb</h4>
                <p>Oil Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/charcoal/painting-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bulb"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/charcoal/painting-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Water Drops</h4>
                <p>Oil Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/charcoal/painting-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Water Drops"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/charcoal/painting-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Lock</h4>
                <p>Oil Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/charcoal/painting-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lock"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/charcoal/painting-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Landscape</h4>
                <p>Oil Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/charcoal/painting-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Landscape"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/charcoal/painting-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Raw Peanut</h4>
                <p>Oil Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/charcoal/painting-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Raw Peanut"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/charcoal/painting-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Girl portrait</h4>
                <p>Oil Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/charcoal/painting-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Girl portrait"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        

      </div>
    </section><!-- End Portfolio Section -->
<?php require "products-footer.php" ?>