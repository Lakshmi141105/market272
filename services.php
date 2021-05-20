<?php require "header.php" ?>
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>The system will determine emotions selected and create customized list of paintings ideas for the emotion captured. </p>
        </div>

        <div class="row gy-4">

        <?php
            if(file_exists('assets/data/emojipaths.txt'))
            {
            $emotions=file('assets/data/emojipaths.txt');    
            if(empty($emotions)) return;
            $emotion=explode(";",$emotions[0]);

            foreach( $emotion as $key =>$value)
            {   
              $value=explode(',',$value);
              $imgPath=$value[0];
              $str=explode('/',$value[1]);
              $mood=$str[0];
              $expr=$str[1];
              echo"
          <div class='col-lg-4 col-md-6 d-flex align-items-stretch' data-aos='zoom-in' data-aos-delay='100'>
            <div style='width:100%;' class='icon-box iconbox-blue'>
              <div class='icon'>
                <svg width='100' height='100' viewBox='0 0 600 600' xmlns='http://www.w3.org/2000/svg'>
                  
                  <img src= $imgPath width='100' height='100' />
                </svg>
                <!-- <i class='bx bxl-dribbble'></i> -->
              </div>
              <h4><a href='assets/services/$mood.php'>$mood</a></h4>
              <p>$expr</p>
            </div>
          </div>";
            }
          }
         ?>

        </div>

      </div>
    </section><!-- End Services Section -->

  
?>
    <?php require "footer.php" ?>