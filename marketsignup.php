<?php ob_start(); ?>
<?php require "marketheader.php"?>
<?php require "assets/services/marketdbconnector.php"?>
<?php
include('facebook-login/facebook-login-setup.php');
?>
 <?php
    
        //session_start();
    	// define variables and set to empty values
        $fnameErr = $lnameErr = $emailIdErr = $hphoneErr = $cphoneErr = $unameErr = $passwdErr = $unameExistsErr = $msg ="";
        $fname = $lname = $emailId = $address = $hphone = $cphone = $uname = $passwd =$confirmpasswdErr="";
        $dbrow = "";    
        $submiterr="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
            if (empty($_POST["firstname"])) {
                $fnameErr = "required.";
            } else {
                $fname = clean($_POST["firstname"]);
            }
      
            if (empty($_POST["lastname"])) {
                $lnameErr = "required.";
            } else {
                $lname = clean($_POST["lastname"]);
            }
      
            if (empty($_POST["email2"])) {
                $emailIdErr = "required.";
            } else {
                $emailId = clean($_POST["email2"]);
            }
      
            if (empty($_POST["haddress"])) {
                $address = "";
            } else {
                $address = clean($_POST["haddress"]);
            }

            if (empty($_POST["hphone"])) {
                $hphoneErr = "required.";
            } else {
                $hphone = clean($_POST["hphone"]);
            }
      
            if (empty($_POST["cell"])) {
                $cphoneErr = "required.";
            } else {
                $cphone = clean($_POST["cell"]);
            }

            if (empty($_POST["username"])) {
                $unameErr = "required.";
            } else {
                $uname = clean($_POST["username"]);
            }
            

            if (empty($_POST["password"])) {
                $passwdErr = "required.";
            } else {
                $passwd = clean($_POST["password"]);               
            }
            if (empty($_POST["confirm_password"])) {
                $confirmpasswdErr = "required.";
            } else {
                $confirmpasswd = clean($_POST["confirm_password"]);              
            }
            if($passwd!=$confirmpasswd)
            {
               //echo "not matching";
                //echo "passwords did not macth!"
                $confirmpasswdErr = "passwords do not match.";
                $submiterr="passwords do not match";
               // return;
            }
      
            if ($uname != '' && $passwd != '') {
                $passwd = password_hash($passwd, PASSWORD_DEFAULT);               
                $conn = new mysqli($servername, $username, $password, $dbname);
                $msg= "Connected successfully"; 
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                $user="SELECT * from marketplace.user WHERE username='$uname';";
                $userQuery= $conn->query($user)  ; 
                if($userQuery->num_rows > 0)
                {                  
                    //user exists
                    $submiterr="Username already exists!";
                }              
                if($submiterr=="")
                {                  
                    echo  $guid;
                    $sql = "INSERT INTO marketplace.user(first_name, last_name, email, address, home_phone, cell_phone, username, password) VALUES  ('$fname', '$lname', '$emailId', '$address', '$hphone', '$cphone', '$uname', '$passwd')";

                    if ($conn->query($sql) === TRUE) {
                        $sqluser = "SELECT * FROM marketplace.user where username='$uname' and password='$passwd'";
                        $sqluserres=$conn->query($sqluser);
                        if ($sqluserres->num_rows >0)
                        {
                            //$data=$sqlproductsres->fetch_assoc();  
                            $user=$sqluserres->fetch_assoc();
                            $userid=$user["id"];
                             //echo "New record created successfully";
                            header("location: marketlogin.php");
                            exit();                          
                        }
                     } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
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
    <section class="page-section" id="signup">   
    <form action="marketsignup.php" method="post" role="form" class="php-user-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="firstname" class="form-control  input-lg" id="fname" placeholder="First Name" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="lastname" class="form-control  input-lg" id="lname" placeholder="Last Name" required>
                </div>              
                <div class="form-group">
        	        <input type="text" class="form-control input-lg" name="username" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                    <!-- <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required"> -->
                    <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                </div>
		        <div class="form-group">
                    <input type="password" class="form-control input-lg" name="confirm_password" placeholder="Confirm Password" required="required">
                    <!-- <span class = "error">* <?php echo $confirmpasswdErr;?></span> -->
                </div>  
                <div class="form-group mt-3">
                  <input type="email" class="form-control  input-lg" name="email2" id="email1" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control  input-lg" name="haddress" id="haddress" placeholder="Home Address" required>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" class="form-control  input-lg" id="hphone" name="hphone" placeholder="Home Phone" required>
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" class="form-control" id="cell" name="cell" placeholder="Cell Phone" required>
                </div>
              </div>              
              <div class="form-group">
              <?php
              if($submiterr=="")
              {
                echo '<button type="submit" class="btn btn-success btn-lg btn-block signup-btn">Sign Up</button>';
              }
              else{
                 if($submiterr=="passwords do not match")
                 {
                    echo '<label style="color:red;">'.$submiterr.'</label>';
                    echo '<button type="submit" class="btn btn-success btn-lg btn-block signup-btn">Sign Up</button>';                   
                 }
                 if($submiterr=="Username already exists!")
                 echo '<div class="text-left"><a class="nav-link js-scroll-trigger active" href="./marketlogin.php">Login here</a></div>';
              }
            ?>
        </div>
            </form>
    </section>
</div>
</body>
</html>









