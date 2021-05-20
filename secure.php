
  <?php
$user = $_REQUEST['access'];

if(!$user)
  header("location: login.php");
  ?>
  <?php require "header.php" ?>

  <section style="padding-bottom:0px;">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Secure</h2>
          
        </div>
     </div>   
     </section>      
 
 <?php
   if($user)
   {
      echo "<section style='padding-bottom:0px;padding-top:0px;'>
      <div class='container' data-aos='fade-up'>
        <div class='section-title'>       
        <div class='user-links'>
          <h4>Our Valued Users</h4>
          <div class='d-flex'>
          <ul class='mx-auto justify-content-center'>";
    $userdata = fopen("assets/data/usersdata.txt", "r");
    while(($line=fgets($userdata))!==false){
            $line = rtrim($line,"\r\n");           
           echo "<li><i style='color:#444444;' class='bx bx-chevron-right'></i> $line</li>";                                    
        }
        fclose($userdata);  
        echo " </ul> </div>
        </div>
      </div>
   </div>   
   </section> ";
    
   }
  ?>
  <?php require "footer.php" ?>