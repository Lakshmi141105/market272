<?php require "servicesheader.php" ?>

<section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>The system will determine emotions selected and create customized list of paintings ideas for the emotion captured. </p>
        </div>

        <div class="row gy-4">

        <?php
            if(file_exists('../../assets/data/angry.txt'))
            {
            $anger=file('../../assets/data/angry.txt');    
            if(empty($anger)) return;
            $angry=explode(";",$anger[0]);

            foreach( $angry as $key =>$value)
            {  
              
              echo"
          <div class='col-lg-4 col-md-6 d-flex align-items-stretch' data-aos='zoom-in' data-aos-delay='100'>
            <div style='width:100%;' class='icon-box iconbox-blue'>
              <div class='icon'>
                <svg style='height:100%;width:100%' viewBox='0 0 600 600' xmlns='http://www.w3.org/2000/svg'>                  
                  <img src= $value  />
                </svg>
                <!-- <i class='bx bxl-dribbble'></i> -->
              </div>
             
            </div>
          </div>";
            }
          }
         ?>

        </div>

      </div>
    </section><!-- End Services Section -->
    <?php require "servicesfooter.php" ?>