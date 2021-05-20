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
          <h2>Products - Glass paintings</h2>
          <p>Glass painting is a contemporary art which has been acquired from the old art of stained glass painting which involved putting small colored pieces of glass together.Glass painting looks beautiful when light or any illumination passes through the transparent medium, the results are simply amazing.</p>
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
              <img src="../../assets/img/glass/glass-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Trees</h4>
                <p>Glass painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/glass/glass-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tiger"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/glass/glass-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Eiffel</h4>
                <p>Glass painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/glass/glass-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Together"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/glass/glass-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Wild Flowers</h4>
                <p>Glass painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/glass/glass-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bulb"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/glass/glass-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Peacock</h4>
                <p>Glass painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/glass/glass-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Water Drops"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/glass/glass-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Flowers</h4>
                <p>Glass painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/glass/glass-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lock"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/glass/glass-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Portrait </h4>
                <p>Glass painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/glass/glass-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Landscape"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/glass/glass-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Rainy Day</h4>
                <p>Glass painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/glass/glass-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Raw Peanut"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/glass/glass-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Tree</h4>
                <p>Glass painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/glass/glass-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Girl portrait"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        

      </div>
    </section><!-- End Portfolio Section -->
<?php require "products-footer.php" ?>