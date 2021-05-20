  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" style="background-image:url('assets/img/home-bg.jpg');background-repeat:no-repeat;">
         <p style="font-size:1.1rem;padding-top:105px;">
         <?php
            $myfile = fopen("assets/data/homepage.txt", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("assets/data/homepage.txt"));
            fclose($myfile);
            ?>
        </p>
        <img src="assets/img/home-bottom.jpg" style="height:20px;" class="img-fluid" alt="">
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" style="background-color:aliceblue" data-aos="zoom-in" data-aos-delay="150">
          <img src="assets/img/home-page.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
</section>