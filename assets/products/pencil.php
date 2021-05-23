<?php require "products-header.php" ?>
<?php
  if(isset($_COOKIE['userid']))
  $id=$_COOKIE['userid'];
?>
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products - Pencil Sketchings</h2>
          <p>Pencil Sketching is the art of creating highly defined artwork using an instrument consisting of graphite enclosed in a cylindrical wooden chamber of different grades.The cylindrical graphite medium or a pencil is used because of its efficiency and simplicity in executing various deeply thought portraits, graphite having the ability to be smudged on paper gives the higher potential to the beautification process.</p>
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
              <img src="../../assets/img/pencil/pencil-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Girl</h4>
                <p>Pencil Sketching</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/pencil/pencil-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tiger"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/pencil/pencil-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Landscape</h4>
                <p>Pencil Sketching</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/pencil/pencil-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Together"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/pencil/pencil-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Stream</h4>
                <p>Pencil Sketching</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/pencil/pencil-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bulb"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/pencil/pencil-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Elephant</h4>
                <p>Pencil Sketching</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/pencil/pencil-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Water Drops"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/pencil/pencil-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bridge</h4>
                <p>Pencil Sketching</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/pencil/pencil-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lock"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/pencil/pencil-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Swans</h4>
                <p>Pencil Sketching</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/pencil/pencil-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Landscape"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/pencil/pencil-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Peacocks</h4>
                <p>Pencil Sketching</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/pencil/pencil-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Raw Peanut"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/pencil/pencil-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Madhubani</h4>
                <p>Pencil Sketching</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/pencil/pencil-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Girl portrait"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/pencil/pencil-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Madhubani</h4>
                <p>Pencil Sketching</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/pencil/pencil-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Girl portrait"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        

      </div>
    </section><!-- End Portfolio Section -->
<?php require "products-footer.php" ?>