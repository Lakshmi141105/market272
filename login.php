<?php require "header.php" ?>
 <?php ob_start(); ?>
  <section style="padding-bottom:0px;">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Secure</h2>
          <p>Soulful Art - Secure</p>
        </div>
     </div>   
     </section> 
     
  <section style="padding-top:0px;">
      <div class="container" style="float:right;width:50%;" >
        <div class="section-title">
          <h4>Login</h4>
          <form action="login.php" method="post" role="form" class="php-login-form">
              <div style="padding-top:20px;" class="row">
              <div class="col-md-6 form-group">
              </div>
                <div class="col-md-6 form-group" style="margin-left: -150px;">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div style="padding-top:20px;" class="row">
                <div class="col-md-6 form-group">
              </div>
              <div class="col-md-6 form-group" style="margin-left: -138px;">
                  <input type="password" name="password" class="form-control" style="width:103.5%;" id="password" placeholder="Your Password" required>
                </div>
                </div>
              </div>              
              <div class="my-3">         
   <div style="display:none;" id="invalid-password" class="sent-message"><strong>You entered an invalid password.Access has been denied</strong></div> 
                <div style="display:none;" id="access-denied" class="sent-message"><strong>You were denied access to this site</strong></div>
              </div>
              <div style="padding-top:15px;" class="text-center"><button name="Login" type="submit">Login</button></div>
            </form>
        </div>
     </div>   
     </section> 
   
<?php 
extract($_POST);
$userFound=false;
 $usernameFound=false;
 $passwordFound=false;    
     if (isset($Login) && !empty($name) && !empty($password)){  
          $userfile = fopen("assets/data/credentials.txt", "r");
            while((!feof($userfile))){
                    $line=fgets($userfile,255);
                    $line = chop($line);                    
                    $user = explode(",", $line,2);
                    if ($name==$user[0])
                    {
                        $usernameFound=true;
                    if(checkPassword($password,$user[1])){
                        $passwordFound=true;                        
                        fclose($userfile);  
                        $userFound=true;
                        break;
                    }   
                }              
                }
                if($userFound)
                {
                    accessGranted($user[0]);                      
                }
                else{
                    if(!$usernameFound)
                    {
                        accessDenied();
                    }
                    else if(!$passwordFound)
                    {
                       wrongPAssword();
                    }
                   
                }
     }
   
    
function checkPassword($password,$data)
{
if($password==$data)
return true;
else
return false;
}


function accessGranted($name)
{
 //echo("Thank You<Strong>Permission has been granted, $name <br/></strong>");
 header("Location: secure.php?access="."true");
 exit;
}

function wrongPAssword()
{
?><script type="text/javascript">$('#invalid-password').show()</script>";<?php
}

function accessDenied()
{
    ?>
    <script type="text/javascript">$('#access-denied').show()</script>";<?php
}

function fieldsBlank()
{
print("<title>Access Denied!</title><strong>Please fill in all form fields.<br/></strong>");
}
?>
  
  <?php require "footer.php" ?>