       <!-- ======= Testimonials Section ======= -->
       <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p style="font-weight:bold;font-size:1.7rem;">Our "Painting" enthusiasts love us</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

          <?php
            if(file_exists('assets/data/Testimonials.txt')&& file_exists('assets/data/testimony-index.txt')&& file_exists('assets/data/testimony-names.txt')&&file_exists('assets/data/testimony-titles.txt'))
            {
            $testimonials=file('assets/data/testimonials.txt');    
            if(empty($testimonials)) return;
            $testimons=explode(";",$testimonials[0]);
            $indexes=file('assets/data/testimony-index.txt');
            if(empty($indexes)) return;
            $index=explode(",",$indexes[0]);
            $names=file('assets/data/testimony-names.txt');
            if(empty($names)) return;
            $name=explode(";",$names[0]);
            $titles=file('assets/data/testimony-titles.txt');
            if(empty($titles)) return;
            $title=explode(";",$titles[0]);
            
            foreach( $testimons as $key =>$value)
             {          
              
                echo "
                <div class='swiper-slide'>
                <div class='testimonial-item'>
                  <p>
                    <i class='bx bxs-quote-alt-left quote-icon-left'></i>
                    $value
                    <i class='bx bxs-quote-alt-right quote-icon-right'></i>
                  </p>
                  <img src='assets/img/testimonials/testimonials-$index[$key].jpg' class='testimonial-img' alt=''
                  <h3>$name[$key]</h3>
                  <h4>$title[$key]</h4>
                </div>
              </div>";
            }
        }
          ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->