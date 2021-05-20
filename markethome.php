
<?php require "marketheader.php"?>
<?php

include('facebook-login/facebook-login-setup.php');
?>
<?php

if(!session_id()){
    session_start();
}

?> 

<section id="banner" class="major" style="height:100%;padding:0px;">
                    <div>
                        <div class="mySlides">
                            <img src="assets/img/foodbanner.jpg" style="width:100%;height:150%">
                            <div class="w3-display-middle w3-large w3-container w3-padding-16 ">
                               <div class="inner">
			           <header class="major">
				       <h1>Welcome!</h1>
				   </header>
				   <div class="content">
				       <p>check these new products/services <br />in all categories.</p>
				           <ul class="actions">
					       <li><a href="#one" class="button next scrolly">Get Started</a></li>
					   </ul>
				   </div>
                               </div>
                           </div>
                       </div>

                       <div class="mySlides">
                           <img src="assets/img/art.jpg" style="width:100%;height:150%">
                           <div class="w3-display-middle w3-large w3-container w3-padding-16 ">
                               <div class="inner">
			           <header class="major">
				       <h1>Welcome!</h1>
				   </header>
			           <div class="content">
				       <p>check these new products/services<br />in all categories</p>
				           <ul class="actions">
					       <li><a href="#one" class="button next scrolly">Get Started</a></li>
					   </ul>
				   </div>
			      </div>
                           </div>
                       </div>

                       <div class="mySlides">
                           <img src="assets/img/foodbanner.jpg" style="width:100%;height:150%">
                               <div class="w3-display-middle w3-large w3-container w3-padding-16 ">
                                   <div class="inner">
			 	       <header class="major">
				           <h1>Welcome!</h1>
				       </header>
				       <div class="content">
				           <p>check these new products/services<br />in all categories.</p>
				           <ul class="actions">
				               <li><a href="#one" class="button next scrolly">Get Started</a></li>
				           </ul>
				       </div>
                                   </div>
                               </div>
                       </div>
<!-- 
                       <div class="mySlides">
                           <img src="iassets/img/art.jpg" style="width:100%">
                           <div class="w3-display-middle w3-large w3-container w3-padding-16">
                               <div class="inner">
			           <header class="major">
				        <h1>Welcome!</h1>
				   </header>
				   <div class="content">
				       <p>check these new products/services<br />in all categories.</p>
				       <ul class="actions">
				           <li><a href="#one" class="button next scrolly">Get Started</a></li>
				       </ul>
				   </div>
			       </div>
                           </div>
                       </div> -->

                   
                    </div>
                </section>
             <section>

		    <!-- One -->
		    <section id="one" class="tiles">
		        <article>
			    <span class="image">
			        <img src="images/decor.jpg" alt="" />
			    </span>
			    <header class="major">
			        <h3><a href="homedecor.php" class="link">Home Decor</a></h3>
				            <p>
                                    <ul>
                                       <li><b>Side tables</b></li>
                                        <li><b>Sofa</b></li>
                                        <li><b>Arm Chair</b></li>
                                        <li><b>Corner Shelve</b></li>
                                        <li><b>Shoe Racks</b></li>
                                    </ul>
                    
			    </header>
			</article>
            </section>
            </section>

                <script>
                    var myIndex = 0;
                    carousel();

                    function carousel() {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        myIndex++;
                        if (myIndex > x.length) {myIndex = 1}
                        x[myIndex-1].style.display = "block";
                        setTimeout(carousel, 2000); // Change image every 2 seconds
                    }
                </script>

</body>
</html>