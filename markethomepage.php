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
        echo $ciphertext;
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

 <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center activity">
                <!-- <div><span class="ml-2"></span></div> -->
                <div><span class="activity-done">Previous Activities</span></div>
                <!-- <div class="icons"><i class="fa fa-search"></i><i class="fa fa-ellipsis-h"></i></div> -->
            </div>
            <div class="mt-3">
                <ul class="list list-inline">        
<?php

$sqlpreviousvisits="select * from producthits where userid=".$uid.";";
$sqlprevvisres=$conn->query($sqlpreviousvisits);
if($sqlprevvisres->num_rows>0)
{
    $rcounts=$sqlprevvisres->num_rows;
    for($rindex=0;$rindex<$rcounts;$rindex++)
    {
    $prevres=$sqlprevvisres->fetch_assoc();
    $prevproductname=$prevres["productname"];
    $prevproducttype=$prevres["type"];
    $pvislink=$prevres["prodlink"];
    $pvislinktimestamp=$prevres["ts"];
   
        echo '
                    <li class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center"><i class="fa fa-check-circle checkicon"></i>
                            <div class="ml-2">
                                <h6 class="mb-0">'.$prevproductname.'</h6>
                                <div class="d-flex flex-row mt-1 text-black-50 date-time">
                                    <div><i class="fa fa-calendar-o"></i><span class="ml-2">'.$pvislinktimestamp.'</span></div>
                                    <div class="ml-3"><span class="ml-2">'.$prevproducttype.'</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                        <div class="d-flex flex-column mr-2">
                           <a href="'.$pvislink.'" target="_blank">View page</a>
                        </div><i class="fa fa-ellipsis-h"></i>
                    </div>                       
                    </li>';
    }
    echo '                 
                </ul>
            </div>
        </div>
    </div>
</div>';
    
}
?>

<!-- <div class="ml-3"><i class="fa fa-clock-o"></i><span class="ml-2">6h</span></div> -->