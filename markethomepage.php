<?php ob_start(); ?>
<?php require "marketheader.php" ?>
>
<?php
if(!session_id()){
    session_start();
}

if(empty($_SESSION["uname"]))
{
    header("location: ./marketlogin.php");
    exit();
}
$username=$_SESSION["uname"];
$sqluser = "SELECT * FROM marketplace.user where username='$username'";
$sqluserres=$conn->query($sqluser);
if ($sqluserres->num_rows >0)
{
    //$data=$sqlproductsres->fetch_assoc();  
    $user=$sqluserres->fetch_assoc();
    $userid=$user["id"];
    //echo $userid;
}
?>

 <div class="top-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 tn-left">


                    <div class="row tn-slider slick-initialized slick-slider">
                    <!-- <button class="slick-prev" aria-label="Previous" type="button" style="">Previous</button> -->
                    <!-- <a  target="_blank"  href="http://www.soulfulart.ml/products.php?id='.$userid.'" tabindex="-1">Find all the paintings here</a>';?> -->
                            <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2850px; transform: translate3d(-570px, 0px, 0px);"><div class="col-md-6 slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 570px;">
                                <div class="tn-img">
                                    <img width="540" height="302" src="assets/img/news/pandemicgallery.jpg">
                                    <div class="tn-title">
                                    <?php
                                    echo '
                                        
                                        <a  target="_blank"  href="http://localhost/soulfulart/products.php?id='.$userid.'" tabindex="-1">One stop portal for all types of creative paintings</a>';?>
                                    </div>
                                </div>
                            </div>
                         
                            <div class="col-md-6 slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 570px;">
                                <div class="tn-img">
                                    <img width="540" height="302" src="assets/img/news/pandemicgallery.jpg">
                                    <div class="tn-title">
                                    <?php
                                    echo '
                                    <a target="_blank" href="http://localhost/soulfulart/products.php?id='.$userid.'" tabindex="-1">One stop portal for all types of creative paintings</a>';?>
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
                                        <a  target="_blank" href="http://lightmore.ml/Menu/Menu_list.html?id='.$userid.'" tabindex="-1">Find all the food related things here</a>';?>
                                    </div>
                                </div>
                            </div>
                          
                            
                            <div class="col-md-6 slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 570px;">
                                <div class="tn-img">
                                    <img width="540" height="302" src="assets/img/foodbanner.jpg">
                                    <div class="tn-title">
                                    <?php
                                    echo '
                                    <a target="_blank" href="http://lightmore.ml/Menu/Menu_list.html?id='.$userid.'" tabindex="-1">Find all the food related things here</a>';?>
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

