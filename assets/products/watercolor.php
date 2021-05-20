<?php require "products-header.php" ?>
<?php
  if(isset( $_REQUEST['id']))
  $id =htmlentities( $_REQUEST['id']);
  echo $id;
?>
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products - water color paintings</h2>
          <p>Light reflects off the white of the paper and bounces up through the colours, creating a luminosity that can be truly magical.</p>
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
              <img src="../../assets/img/watercolor/painting-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Flower Abstract Art</h4>
                <p>Water color Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/watercolor/painting-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Flower Abstract Art"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/watercolor/painting-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bird</h4>
                <p>Water color Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/watercolor/painting-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bird"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/watercolor/painting-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Baby Elephant</h4>
                <p>Water color Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/watercolor/painting-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Baby Elephant"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/watercolor/painting-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Flowers</h4>
                <p>Water color Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/watercolor/painting-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Flowers"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/watercolor/painting-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mystic mountains</h4>
                <p>Water color Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/watercolor/painting-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mystic mountains"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/watercolor/painting-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Night Scene</h4>
                <p>Water color Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/watercolor/painting-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Night Scene"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/watercolor/painting-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Hanging Bridge Fall</h4>
                <p>Water color Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/watercolor/painting-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Hanging Bridge"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/watercolor/painting-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pond View</h4>
                <p>Water color Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/watercolor/painting-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pond View"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/watercolor/painting-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Dark Forest</h4>
                <p>Water color Painting</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/watercolor/painting-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Dark Forest"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
<?php require "products-footer.php" ?>