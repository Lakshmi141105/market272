<?php require "products-header.php" ?>
<?php
  if(isset($_COOKIE['userid']))
  $id=$_COOKIE['userid'];
?>
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products - Collage paintings</h2>
          <p>This is an assembled creative artwork having the visual effect.Collage work can be done with pieces of colored or handmade papers, ribbons, applying paints, magazines, etcetera.The themes are varied and mostly is a cheap mode of art.Collage is basically an accumulation of various artworks into a singular entity, which is the knack of visual appeal it portrays.</p>
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
              <img src="../../assets/img/collage/collage-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Study Light</h4>
                <p>Collage Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/collage/collage-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tiger"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/collage/collage-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Universe</h4>
                <p>Collage Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/collage/collage-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Together"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/collage/collage-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Girl with umbrella</h4>
                <p>Collage Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/collage/collage-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bulb"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/collage/collage-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bird</h4>
                <p>Collage Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/collage/collage-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Water Drops"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/collage/collage-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Cycle</h4>
                <p>Collage Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/collage/collage-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lock"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/collage/collage-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Flowers</h4>
                <p>Collage Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/collage/collage-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Landscape"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/collage/collage-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Tree</h4>
                <p>Collage Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/collage/collage-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Raw Peanut"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/collage/collage-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Landscape</h4>
                <p>Collage Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/collage/collage-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Girl portrait"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        

      </div>
    </section><!-- End Portfolio Section -->
<?php require "products-footer.php" ?>