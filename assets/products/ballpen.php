<?php require "products-header.php" ?>
<?php
  if(isset($_COOKIE['userid']))
  $id=$_COOKIE['userid'];
?>

<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products - Ballpoint paintings</h2>
          <p>Ballpoint pen enthusiasts find the ballpoint pens extremely handy and efficient to create artwork. They are enthused by the quickness attained by using pens, some artists mix different coloring medium with the pens, while others use ballpoint pen as the whole and sole way to create art.Low cost, availability, and portability are reproduced by practitioners as qualities which make this common writing tool a convenient art supply.</p>
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
              <img src="../../assets/img/ballpen/pen-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Giraffe</h4>
                <p>Ball Pen Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/ballpen/pen-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tiger"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/ballpen/pen-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Dancing</h4>
                <p>Ball Pen Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/ballpen/pen-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Together"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/ballpen/pen-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Little Krishna</h4>
                <p>Ball Pen Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/ballpen/pen-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bulb"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/ballpen/pen-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>City in Rain</h4>
                <p>Ball Pen Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/ballpen/pen-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Water Drops"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/ballpen/pen-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Girl</h4>
                <p>Ball Pen Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/ballpen/pen-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lock"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/ballpen/pen-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Port City</h4>
                <p>Ball Pen Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/ballpen/pen-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Landscape"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/ballpen/pen-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Cat</h4>
                <p>Ball Pen Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/ballpen/pen-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Raw Peanut"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/ballpen/pen-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Dream</h4>
                <p>Ball Pen Paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/ballpen/pen-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Girl portrait"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        

      </div>
    </section><!-- End Portfolio Section -->
<?php require "products-footer.php" ?>