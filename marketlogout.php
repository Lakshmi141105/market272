<?php ob_start(); ?>
<?php require "marketheader.php"?>
<?php  
    
   $userid=$_SESSION["uid"];
   date_default_timezone_set('Asia/Kolkata');
   $date = date('d-m-y h:i:s');
   $sql="UPDATE marketplace.userstatus set status='inactive',logouttime='$date',sessionid='' where userid=$userid;";
   $res=$conn->query($sql);       
   $conn->close();
   unset($_SESSION["uname"]);  
   unset($_SESSION["uid"]);  
   header("location: ./marketlogin.php");
   exit();
?>
<!-- Wrapper -->
    <div id="main">
        <section>
            <form method="get" action="login.html">
<center>
                <ul class="actions">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="marketlogin.php">Login Again</a></li>

                </ul>
</center>
            </form>
        </section>
    </div>


<!-- Scripts -->

</body>
</html>