<?php require "products-header.php" ?>
<?php
  if(isset($_COOKIE['userid']))
  $id=$_COOKIE['userid'];
?>
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products - Color pencil sketchings</h2>
          <p>Being the most simplistic, there are many newer implementations that have changed the strata of colored pencil artworks around the globe.The elements of colored pencils are wax or oil-based and consist of proportions of pigments and binding agents.</p>
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
              <img src="../../assets/img/color/color-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Swans</h4>
                <p>Color Pencil Sketchings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/color/color-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tiger"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/color/color-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Madhubani</h4>
                <p>Color Pencil Sketchings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/color/color-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Together"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/color/color-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bird</h4>
                <p>Color Pencil Sketchings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/color/color-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bulb"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/color/color-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>River & Trees</h4>
                <p>Color Pencil Sketchings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/color/color-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Water Drops"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/color/color-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Walking Bridge</h4>
                <p>Color Pencil Sketchings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/color/color-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lock"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/color/color-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Landscape </h4>
                <p>Color Pencil Sketchings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/color/color-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Landscape"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/color/color-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Blue Bird</h4>
                <p>Color Pencil Sketchings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/color/color-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Raw Peanut"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/color/color-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Flowers</h4>
                <p>Color Pencil Sketchings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/color/color-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Girl portrait"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/color/color-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4> Water Drop</h4>
                <p>Color Pencil Sketchings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/color/color-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Girl portrait"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        

      </div>
    </section><!-- End Portfolio Section -->
<?php require "products-footer.php" ?>