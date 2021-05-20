<?php ob_start(); ?>
<?php require "marketheader.php"?>
<?php
include('facebook-login/facebook-login-setup.php');
?>
<?php
 
        // define variables and set to empty values
        $unameErr = $passwdErr = $msg = "";
        $uname = $passwd = "";   
        $error="";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if (empty($_POST["username"])) {
                $unameErr = "Username is required";
              } else {
                $uname = clean($_POST["username"]);
              }

              if (empty($_POST["password"])) {
                $passwdErr = "Password is required";
              } else {
                $passwd = clean($_POST["password"]);
              }
  
              if($uname != '' && $passwd != '') {	
                
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                //$msg2= "Connected successfully -- index --". $_SESSION["uname"]; 
                // Check connection
                if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                }
                echo $uname;
                echo $passwd;
                $sql = "SELECT first_name, password,id FROM marketplace.user WHERE username = '$uname' and password = '$passwd'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                      $msg = "found";
                      $error="";     
                        $ur=$result->fetch_assoc();                   
                        date_default_timezone_set('Asia/Kolkata');
                        $date = date('d-m-y h:i:s');
                        echo "whats";
                        $userid=$ur["id"];
                        echo $userid;
                        $sqlus="UPDATE marketplace.userstatus set status='active',logintime='$date' where userid=$userid;";
                        $res=$conn->query($sqlus);  
                        print_r($res);     
                        //$conn->close();
                      //print($msg);
                      $_SESSION["uname"] = $uname;
                      $_SESSION["uid"] = $ur["id"];
                      $msg= "Welcome ". $_SESSION["uname"]."! "; 
                      //echo $_SESSION["uname"];
                      header("location: ./markethomepage.php");
                      exit();               
                }else{
                  $error="Invalid credentials!";
                } 
                $conn->close();
              }
        }
        
        function clean($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
        }
  ?>
<div class="signup-form" style="padding:0px;">
<section class="page-section" id="login">
    <form action="marketlogin.php" method="post">
		<!-- <h2>Create an Account</h2> -->
		<p class="hint-text">Sign in with your social media account or email address</p>
		<div class="social-btn text-center">			
            <?php echo $fbLoginButton; ?>		
		</div>
		<div class="or-seperator"><b>or</b></div>
        <div class="form-group">
        	<input type="text" class="form-control input-lg" name="username" placeholder="Username" required="required">
        </div>
	
		<div class="form-group">
            <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
        </div>
		  
        <div class="form-group">
            <button type="submit"  class="btn btn-success btn-lg btn-block signup-btn">Login</button>
        </div>
        <?php
        if($error!="")
        {
          echo '<label style="color:red;">Invalid Credentials</label>';
        }
        ?>
    </form>
    <div class="text-center">Want to Register?<a class="nav-link js-scroll-trigger active" href="./marketsignup.php">Signup here</a></div>
    </section>
</div>
</body>
</html>









