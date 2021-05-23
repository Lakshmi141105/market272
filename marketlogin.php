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
                $sql = "SELECT username,first_name, password,id FROM marketplace.user WHERE username = '$uname'";
                $result = $conn->query($sql);
                $ur=$result->fetch_assoc();     
                if ($result->num_rows > 0 && $ur["username"]==$uname && password_verify($passwd, $ur["password"]) )  {
                      $msg = "found";                      
                          //date_default_timezone_set('Asia/Kolkata');
                          //$date = date('d-m-y h:i:s');
                          echo "whats";
                          $userid=$ur["id"];
                          //echo $userid;
                          $guid=createGUID();
                          echo $guid;
                          $sqlusstatus="SELECT * FROM marketplace.userstatus where userid=$userid;";
                          $sqluserstatusres=$conn->query($sqlusstatus);  
                          // print_r($res);     
                            //$conn->close();
                          //print($msg);
                          date_default_timezone_set('Asia/Kolkata');
                          $date = date('d-m-y h:i:s');
                          if($sqluserstatusres->num_rows>0)
                          {
                            $sqlustatus="UPDATE marketplace.userstatus set status='active',logintime='$date',sessionid='$guid' where userid=$userid;";                          
                          }
                          else{
                            $sqlustatus = "INSERT INTO marketplace.userstatus VALUES  ($userid,'$uname','$date','$date','active','$guid')";
                            
                          }
                          echo "wats this";
                          $sres=$conn->query($sqlustatus);
                          print_r($sres);                         
                          $_SESSION["uname"] = $uname;
                          $_SESSION["uid"] = $ur["id"];
                          $msg= "Welcome ". $_SESSION["uname"]."! "; 
                          if ($sres=== TRUE) {
                        
                            header("location: ./markethomepage.php");
                            exit();      
                          }
                          //$error="";
                         // //echo $_SESSION["uname"];
                        
                            
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
        function createGUID()
        {
          if (function_exists('com_create_guid'))
          {
            return com_create_guid();
          }
          else
          {
            mt_srand((double)microtime()*10000);
            //optional for php 4.2.0 and up.
            $set_charid = strtoupper(md5(uniqid(rand(), true)));
            $set_hyphen = chr(45);
            $set_uuid="";
            // "-"
            $set_uuid = $set_uuid
            .substr($set_charid, 0, 8).$set_hyphen
            .substr($set_charid, 8, 4).$set_hyphen
            .substr($set_charid,12, 4).$set_hyphen
            .substr($set_charid,16, 4).$set_hyphen
            .substr($set_charid,20,12);
            //.chr(125);
            // "}"
            return $set_uuid;
          }
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









