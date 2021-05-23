<?php require "products-header.php" ?>
<?php
  if(isset($_COOKIE['userid']))
  $id=$_COOKIE['userid'];
?>
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products - Pastel Paintings</h2>
          <p>Pastel Painting is a form of artwork where pastels are used to create a well-defined and thoughtful paintings.The binder is a neutral hue and low saturation in pastel.</p>
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
              <img src="../../assets/img/pastel/pastel-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Poppies</h4>
                <p>Pastel Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/pastel/pastel-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tiger"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/pastel/pastel-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Landscape</h4>
                <p>Pastel Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/pastel/pastel-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Together"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/pastel/pastel-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Wild Flowers</h4>
                <p>Pastel Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/pastel/pastel-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bulb"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/pastel/pastel-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Flowers</h4>
                <p>Pastel Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/pastel/pastel-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Water Drops"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/pastel/pastel-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Nature</h4>
                <p>Pastel Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/pastel/pastel-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lock"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/pastel/pastel-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Flowers</h4>
                <p>Pastel Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/pastel/pastel-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Landscape"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/pastel/pastel-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bird</h4>
                <p>Pastel Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/pastel/pastel-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Raw Peanut"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/pastel/pastel-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Road</h4>
                <p>Pastel Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/pastel/pastel-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Girl portrait"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/pastel/pastel-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sea View</h4>
                <p>Pastel Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/pastel/pastel-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Girl portrait"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        

      </div>
    </section><!-- End Portfolio Section -->
<?php require "products-footer.php" ?>