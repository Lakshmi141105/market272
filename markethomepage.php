<?php ob_start(); ?>
<?php require "marketheader.php" ?>
>
<?php
if(!session_id()){
    session_start();
}

if(empty($_SESSION["uid"]))
{
    header("location: ./marketlogin.php");
    exit();
}
$uid=$_SESSION["uid"];
echo $uid;
$sqluser = "SELECT * FROM marketplace.userstatus where userid=$uid";
$sqluserres=$conn->query($sqluser);
$key="market";
$ciphertext="";
$tags="";
if ($sqluserres->num_rows >0)
{
    //$data=$sqlproductsres->fetch_assoc();  
    $usersessionid=$sqluserres->fetch_assoc();
    $sessionid=$usersessionid["sessionid"];
    $cipher = "aes-128-gcm";
    if (in_array($cipher, openssl_get_cipher_methods()))
    {
        $ivlen = openssl_cipher_iv_length($cipher);
        $iv = openssl_random_pseudo_bytes($ivlen);        
        $ciphertext = openssl_encrypt($sessionid, $cipher, $key, $options=0, $iv,$tag);
        echo "tag: ".bin2hex($tag)."<br>" . PHP_EOL;
        $tags=bin2hex($tag);
        $ivs=bin2hex($iv);
        $sqlusertag = "INSERT INTO marketplace.encryptiondata VALUES('$ciphertext','$tags','$ivs');";
        $sqluserres=$conn->query($sqlusertag);       
        //$original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv,$tag);
        //echo $original_plaintext;
        //echo $userid;
    }
}
?>

 <div class="top-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 tn-left">
                    <div class="row tn-slider slick-initialized slick-slider">
                    <!-- <a  target="_blank"  href="http://myphpworld-env.eba-v47gj2kf.us-west-2.elasticbeanstalk.com//products.php?id='.$ciphertext.'" tabindex="-1">One stop portal for all types of creative paintings</a>';?> -->
                    <!-- <button class="slick-prev" aria-label="Previous" type="button" style="">Previous</button> -->
                    <!-- <a  target="_blank"  href="http://www.soulfulart.ml/products.php?id='.$userid.'" tabindex="-1">Find all the paintings here</a>';?> -->
                    <!-- <a  target="_blank"  href="http://localhost/soulfulart/products.php?id='.$userid.'" tabindex="-1">One stop portal for all types of creative paintings</a>';?> -->
                            <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2850px; transform: translate3d(-570px, 0px, 0px);"><div class="col-md-6 slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 570px;">
                                <div class="tn-img">
                                    <img width="540" height="302" src="assets/img/pandemicgallery.jpg">
                                    <div class="tn-title">
                                    <?php
                                    echo '
                                    <a  target="_blank"  href="http://localhost/soulfulart/products.php?id='.urlencode($ciphertext).'" tabindex="-1">One stop portal for all types of creative paintings</a>';?>
                                       
                                    </div>
                                </div>
                            </div>
                         
                            <div class="col-md-6 slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 570px;">
                                <div class="tn-img">
                                    <img width="540" height="302" src="assets/img/pandemicgallery.jpg">
                                    <div class="tn-title">
                                    <?php
                                    echo '
                                    <a  target="_blank"  href="http://localhost/soulfulart/products.php?id='.urlencode($ciphertext).'" tabindex="-1">One stop portal for all types of creative paintings</a>';?>
                                    </div>
                                </div>
                            </div></div></div>
                            
                        <!-- <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button> -->
                        </div>
                        </div>


                    <div class="col-md-6 tn-right">
                    <div class="row tn-slider slick-initialized slick-slider">
                    <!-- <button class="slick-prev" aria-label="Previous" type="button" style="">Previous</button> -->
                            <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2850px; transform: translate3d(-570px, 0px, 0px);"><div class="col-md-6 slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 570px;">
                                <div class="tn-img">
                                    <img width="540" height="302" src="assets/img/foodbanner.jpg">
                                    <div class="tn-title">
                                    <?php
                                    echo '
                                        <a  target="_blank" href="http://lightmore.ml/Menu/Menu_list.html?id='.urlencode($ciphertext).'" tabindex="-1">Find all the food related things here</a>';?>
                                    </div>
                                </div>
                            </div>
                          
                            
                            <div class="col-md-6 slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 570px;">
                                <div class="tn-img">
                                    <img width="540" height="302" src="assets/img/foodbanner.jpg">
                                    <div class="tn-title">
                                    <?php
                                    echo '
                                    <a target="_blank" href="http://lightmore.ml/Menu/Menu_list.html?id='.urlencode($ciphertext).'" tabindex="-1">Find all the food related things here</a>';?>
                                    </div>
                                </div>
                            </div></div></div>
                            
                        <!-- <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button> -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Top News End-->

