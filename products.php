<?php ob_start(); ?>
<?php require "header.php" ?>
<?php require "assets/services/marketdbconnector.php"?>
<?php
    if(isset($_REQUEST['id']))
    {
      $id = $_REQUEST['id'];         
      $sql="SELECT * from marketplace.encryptiondata where ciphertext='$id';";
      $res=$conn->query($sql);
      $sessionid="";
      if($res->num_rows > 0)
       {    
        $sres=$res->fetch_assoc();  
        //echo $sres['tag'];       
        $tag =hex2bin($sres['tag']); 
        $iv = hex2bin($sres['iv']);      
        $key="market";
        $ciphertext="";
        //echo $tag;
        //echo $iv;
        $cipher = "aes-128-gcm";
       // $tags="";
        if (in_array($cipher, openssl_get_cipher_methods()))
        {
            $ciphertext = $id;          
            $original_plaintext = openssl_decrypt($id, $cipher, $key, $options=0, $iv,$tag);
            $sessionid=$original_plaintext;
           // echo $original_plaintext;//got the session id , now g et the user id with session id
            //echo $userid;
        }
        $sqlu="SELECT * from marketplace.userstatus where sessionid='$sessionid' and status='active';";
        $resu=$conn->query($sqlu);
        if($resu->num_rows > 0)
         {    
          $sresu=$resu->fetch_assoc();       
          $userid=$sresu["userid"];
          echo $userid;
          setcookie("userid", $userid, time() + (86400 * 30));
         }
         else{
          setcookie("userid","", time() - 3600);
          header("location: error.php");
          exit();
       }
       }      
      else{
        setcookie("userid","", time() - 3600);
         header("location: error.php");
         exit();
      }
     
      $conn->close();
     
    }
    else{   
      setcookie("userid","", time() - 3600);   
      header("location: error.php");
      exit();
    }
  
    
?>
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products</h2>
          <p>If you're interested in buying an art work, simply visit the contact us page and send a message directly to us.</p>
        </div>
        <div class="section-title">
        <p>
        <a target="_blank" style="text-decoration: underline;" href="assets/products/tops.php">Last 5 previously visited products </a></p>
        <p><a  target="_blank" style="text-decoration: underline;" href="assets/products/tops.php">5 most visited products </a></p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
            <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-receipt"></i>
              <a class="anchor" target="_blank" href="viewproducts.php?id=1"> Oil Paintings</a>
              <p>Oil painting techniques can feel overwhelming. With it's depth of colors it breaths new life into your paintings.</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-cube-alt"></i>              
              <a class="anchor" target="_blank"  href="viewproducts.php?id=2"> Acrylic Paintings</a>
              <p>Acrylics are affordable, making them ideal for covering large areas with paint. Because these paints are opaque and fast drying, they can be very forgiving, allowing you to cover up mistakes with more paint.</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-images"></i>              
              <a class="anchor" target="_blank"  href="viewproducts.php?id=3">Watercolor Paintings</a>
              <p>Light reflects off the white of the paper and bounces up through the colours, creating a luminosity that can be truly magical.</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-shield"></i>              
              <a class="anchor" target="_blank"  href="viewproducts.php?id=4">Charcoal drawings</a>
              <p>Charcoal drawing is addictive. Maybe it’s because charcoal drawings are so fast and immediate, or maybe because the final look is often so impressive.</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-badge"></i>              
              <a class="anchor" target="_blank"  href="viewproducts.php?id=5">Pastel paintings</a>
              <p>Pastel Painting is a form of artwork where pastels are used to create a well-defined and thoughtful paintings.The binder is a neutral hue and low saturation in pastel.
pencil sketchings.</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-aperture"></i>              
              <a class="anchor" target="_blank"  href="viewproducts.php?id=6">pencil sketchings</a>
              <p>Pencil Sketching is the art of creating highly defined artwork using an instrument consisting of graphite enclosed in a cylindrical wooden chamber of different grades.The cylindrical graphite medium or a pencil is used because of its efficiency and simplicity in executing various deeply thought portraits, graphite having the ability to be smudged on paper gives the higher potential to the beautification process.</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-blanket"></i>              
              <a class="anchor" target="_blank"  href="viewproducts.php?id=7">Ink paintings</a>
              <p>Ink paintings are made with a liquid that consists of pigments or dyes and is used to color a surface to create illustrations and artworks.Ink is used for drawing with a pen, brush, or quill.Ink paintings feel like magic when they’re made.It has a rich texture in the paintings that are worth it.</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-atom"></i>              
              <a class="anchor" target="_blank" href="viewproducts.php?id=8">Coloured Pencil sketchings</a>
              <p>Being the most simplistic, there are many newer implementations that have changed the strata of colored pencil artworks around the globe.The elements of colored pencils are wax or oil-based and consist of proportions of pigments and binding agents.</p>
            </div>

            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-brightness"></i>              
              <a class="anchor" target="_blank"  href="viewproducts.php?id=9">Glass paintings</a>
              <p>Glass painting is a contemporary art which has been acquired from the old art of stained glass painting which involved putting small colored pieces of glass together.Glass painting looks beautiful when light or any illumination passes through the transparent medium, the results are simply amazing.</p>
            </div>

            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-book-reader"></i>              
              <a class="anchor" target="_blank"  href="viewproducts.php?id=10">Ball Point Pen Sketcihings</a>
              <p>Ballpoint pen enthusiasts find the ballpoint pens extremely handy and efficient to create artwork. They are enthused by the quickness attained by using pens, some artists mix different coloring medium with the pens, while others use ballpoint pen as the whole and sole way to create art.Low cost, availability, and portability are reproduced by practitioners as qualities which make this common writing tool a convenient art supply.</p>
            </div>
          

            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-camera-home"></i>              
              <a class="anchor" target="_blank"  href="viewproducts.php?id=11">Collage paintings</a>
              <p>This is an assembled creative artwork having the visual effect.Collage work can be done with pieces of colored or handmade papers, ribbons, applying paints, magazines, etcetera.The themes are varied and mostly is a cheap mode of art.Collage is basically an accumulation of various artworks into a singular entity, which is the knack of visual appeal it portrays.</p>
            </div>

            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-cog"></i>              
              <a class="anchor" target="_blank"  href="viewproducts.php?id=12">Sand paintings</a>
              <p>The skill of sand painting is the ability to pour sand or other colored pigments gathered from various sources to create a fixed or unfixed form of artwork.Sand Painting has various forms, but the art form that is majorly practiced and known by the population is the quick stokes on sand poured on a given surface to create illustrations that are not permanent and can be changed according to the artist.It is very unique than the others. It requires a lot of patience and can be taxing to do.</p>
            </div>

            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-chip"></i>              
              <a class="anchor" target="_blank"  href="viewproducts.php?id=13">Spray paintings</a>
              <p>In spray painting, aerosol paint comes out from the pressurized container by controlling it with a valve.In the 1880s, the spraying paint with compressed air was used back in the Southern Pacific Railway.The portion of the surface where a particular color is needed to be applied is kept open, while the other portions are covered.This is done so that the color does not spread to other portions of the painting.</p>
            </div>

          </div>
          <div class="image col-lg-6 order-1 order-lg-2 " data-aos="zoom-in" data-aos-delay="100">
            <img style="padding-bottom:50px;" src="assets/img/wall-painting.jpg" alt="" class="img-fluid">            
            <img style="padding-bottom:50px;" src="assets/img/product-images/glass.jpg" alt="" class="img-fluid">
            <img style="padding-bottom:50px;" src="assets/img/product-images/painting-2.jpg" alt="" class="img-fluid">
            <img style="padding-bottom:50px;" src="assets/img/product-images/painting-3.jpg" alt="" class="img-fluid">
            <img style="padding-bottom:50px;" src="assets/img/product-images/painting-6.jpg" alt="" class="img-fluid">            

          </div>
        </div>

      </div>
    </section><!-- End Features Section -->
    <?php require "footer.php" ?>