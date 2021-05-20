<?php 

ob_clean();
ob_end_clean();
//ob_flush();
?>
<?php require "header.php" ?>

<div class="tab" style="margin-top:101px!important;">
    <button id="btncreate" class="tablinks" onclick="clickHandle(event, 'Create')">Create</button>
    <button id="btnsearch" class="tablinks" onclick="clickHandle(event, 'Search')">Search</button>
  </div>

  <div id="Create" class="tabcontent" style="display:block;">
  <div class="row">
    <div class="col-lg-6" style="margin-top:50px;">
            <form action="usersection.php" method="post" role="form" class="php-user-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="firstname" class="form-control" id="fname" placeholder="First Name" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="lastname" class="form-control" id="lname" placeholder="Last Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0" style="padding-top:20px;">
                  <input type="email" class="form-control" name="email2" id="email1" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="haddress" id="haddress" placeholder="Home Address" required>
              </div>
              <div class="row">
                <div class="col-md-6 form-group" style="padding-top:20px;">
                    <input type="text" class="form-control" id="hphone" name="hphone" placeholder="Home Phone" required>
                </div>
                <div class="col-md-6 form-group" style="padding-top:20px;">
                    <input type="text" class="form-control" id="cell" name="cell" placeholder="Cell Phone" required>
                </div>
              </div>              
              <div class="text-center" style="padding-bottom:10px;padding-top:20px;"><button name="Login" type="submit">Create</button></div>
            </form>
          </div>         
          <div class="col-lg-6" style="margin-top:50px; overflow-y: scroll;max-width:49%!important;max-height: 300px;">
          <?php 
           // echo $_SERVER['RDS_HOSTNAME'];        
          $servername = "database-1.ckswgwtyfetx.us-west-2.rds.amazonaws.com";
          $username = "root";
          $password = "chitty1411";
        
          //$conn =  mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
          // Create connection
          $conn = mysqli_connect($servername, $username, $password);
          
          // Check connection
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }
          $query = "SELECT count(*) FROM sys.user ;";
          $result = $conn->query($query);
          if ($result->num_rows > 0) {
            $row = $result->fetch_row();
            $value = $row[0] ?? false;
         echo '<span>Total Users Count:'.$value;
          }
          $query = "SELECT * FROM sys.user ORDER BY id desc";
          $result = $conn->query($query);
         print('<table border = "1" cellpadding = "3" cellspacing = "2"
            style = "background-color: #ADD8E6">  
            <tr>
               <td>ID</td>
               <td>Last Name</td>
               <td>First Name</td>
               <td>E-mail Address</td>
               <td>Address</td>
               <td>Home Phone</td>
               <td>Cell Phone</td>
            </tr>');?>
            <?php
             
               if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {               
                  print( "<tr>" );                 
                  foreach ( $row as $key => $value ) 
                     print( "<td>$value</td>" );
   
                  print( "</tr>" );
               }
              }else{
                echo '<strong>Sorry! couldnt fetch results</strong>';
              }
   
               $conn->close();
            ?>
   
         </table>
         </div>
          </div>
</div>

  <div id="Search" class="tabcontent">
  <div class="col-lg-6" style="margin-top:50px;">
            <form action="usersection.php" method="post" role="form" class="php-user-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="searchtext" class="form-control" id="stext" placeholder=" Search by Name| Email | Phone Number " required>
                </div>                
              </div>             
              <div class="text-center" style="padding-bottom:10px;padding-top:20px;"><button name="Login" type="submit" onclick="btnSearch(event);">Search</button></div>
            </form>
          </div>
  </div>

  
<script>
document.body.onload = function() {        
        var clicked = sessionStorage.getItem('clicked');
      
        if(clicked)
        {
          tabcontent = document.getElementById("Create");
          tabcontent.style.display = "none";
          document.getElementById("Search").style.display = "block";
        }
        sessionStorage.removeItem('clicked');     
    }

function btnSearch(evt)
{   
    isSearchcliecked=true;
    sessionStorage.setItem('clicked', 'true');
    document.getElementById("Search").style.display = "block";   
}

function clickHandle(evt, animalName) {
     evt.preventDefault();
    evt.stopPropagation();
    evt.stopImmediatePropagation();
  let i, tabcontent, tablinks;

  // This is to clear the previous clicked content.
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Set the tab to be "active".
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Display the clicked tab and set it to active.
  document.getElementById(animalName).style.display = "block";
  evt.currentTarget.className += " active";
  //if(animalName=='Search')
  //{
    if(document.getElementById('result')!=null)
    document.getElementById('result').style.display = "none";
    if(document.getElementById('tblResult')!=null)
    document.getElementById('tblResult').style.display = "none";
    if(document.getElementById('tblSrchResult')!=null)
    document.getElementById('tblSrchResult').style.display = "none";
    
 // }
}
</script>

          <?php
// $servername = "localhost";
// $username = "root";
// $password = "chitty1411";
$servername = "database-1.ckswgwtyfetx.us-west-2.rds.amazonaws.com";
$username = "root";
$password = "chitty1411";
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
extract($_POST);
$iserror=false;
if(isset($hphone))
{
  //echo $hphone;
if ( !preg_match ( "^\([0-9]{3}\)[0-9]{3}-[0-9]{4}^", $hphone ) ) {
  $formerrors[ "phoneerror" ] = true;
  $iserror = true;
}
}

// echo $firstname;
if (isset($firstname) && !empty($firstname) && isset($lastname) && !empty($lastname) && !$iserror ){      
    if($firstname !=''||$lastname !=''){
    //Insert Query of SQL
    $query = "INSERT INTO sys.user (firstname, lastname, email, homeaddress, homephone, cellphone) VALUES('$firstname', '$lastname', '$email2', '$haddress','$hphone','$cell')";
    $result = $conn->query($query);
    echo "<br/><br/><span style='display:block;' id='result'>Data Inserted successfully...!!</span>";
    print("  <table style='display:block;' id='tblResult' border = '0' cellpadding = '0' cellspacing = '10'>
    <tr>
    <td style='padding-right:15px;' bgcolor = '#ffffaa'>First Name</td>
     <td style='padding-right:15px;' bgcolor = '#ffffaa'>Last Name</td>
     <td style='padding-right:15px;' bgcolor = '#ffffbb'>Email</td>
     <td style='padding-right:15px;' bgcolor = '#ffffcc'>Address</td>
     <td style='padding-right:15px;' bgcolor = '#ffffdd'>Home Phone</td>
     <td  bgcolor = '#ffffdd'>Cell Phone</td>
     </tr>
    <tr>
    <td style='padding-right:15px;'>$firstname</td>
    <td style='padding-right:15px;'>$lastname</td>
     <td style='padding-right:15px;'>$email2</td>
     <td style='padding-right:15px;'>$haddress</td>
    <td style='padding-right:15px;'>$hphone</td>
    <td style='padding-right:15px;'>$cell</td>
     </tr></table>

    <br /><br /><br />" );
    die();
    }
    else{
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
    }
    }
   elseif($iserror)
   {
    if($formerrors["phoneerror"])
    echo "<br/><span><strong>Phone number format is not correct!<strong></span>";echo $hphone;
    die();
   }
    else
    {
        if (isset($searchtext) && !empty($searchtext)){

            $query = "select * from sys.user where firstname='$searchtext' or lastname='$searchtext' or email='$searchtext' or homephone = '$searchtext'";
            $result = $conn->query($query);
            if ($result->num_rows > 0) {
              print("  <table style='display:block;' id='tblSrchResult' border = '0' cellpadding = '0' cellspacing = '10'>
    <tr>
    <td style='padding-right:15px;' bgcolor = '#ffffaa'>First Name</td>
     <td style='padding-right:15px;' bgcolor = '#ffffaa'>Last Name</td>
     <td style='padding-right:15px;' bgcolor = '#ffffbb'>Email</td>
     <td style='padding-right:15px;' bgcolor = '#ffffcc'>Address</td>
     <td style='padding-right:15px;' bgcolor = '#ffffdd'>Home Phone</td>
     <td  bgcolor = '#ffffdd'>Cell Phone</td>
     </tr>");
                // output data of each row
                while($row = $result->fetch_assoc()) {
                 // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                 if($row["id"]!=null&&$row["firstname"]!=null&& $row["lastname"]!=null && $row["email"]!=null && $row["homeaddress"]!=null &&$row["cellphone"]!=null )
                 {
                print('<tr>
    <td style="padding-right:15px;">'.$row["firstname"].'</td>
    <td style="padding-right:15px;">'.$row["lastname"].'</td>
     <td style="padding-right:15px;">'.$row["email"].'</td>
     <td style="padding-right:15px;">'.$row["homeaddress"].'</td>
    <td style="padding-right:15px;">'.$row["homephone"].'</td>
    <td style="padding-right:15px;"">'.$row["cellphone"].'</td>
     </tr></table>

    <br /><br /><br />' );
    die();
                }
              }
              } else {
               // echo "0 results";
              }
        }  

    }
    $conn->close(); // Closing Connection with Server
?>
<div>
<h4>Other User's List</h4>
<table id="usersList" align = center>
<tr>
    
     <td class="tableheader"><strong>First Name</strong></td>
     <td class="tableheader"><strong>Last Name</strong></td>
     <td class="tableheader"><strong>Email</strong></td>
     <td class="tableheader"><strong>Home Address</strong></td>
     <td class="tableheader"><strong>Home Phone</strong></td>
     <td class="tableheader"><strong>Cell Phone</strong></td>
     <td class="tableheader"><strong>Company</strong></td>
</tr>
<?php

 $lightmore="http://lightmore.ml/php/usersearchback.php";
 $soulfulart="http://www.soulfulart.ml/userlist.php";
 $angmaterials="http://angmaterials.com/userlist.php";
$usrArrNames=array("SoulfulArt","AngMaterials","LightMore");

$urlArray = array($soulfulart,$angmaterials,$lightmore);

foreach($urlArray as $urlkeys=>$urlvalues)
{
$ch = curl_init($urlvalues);
$filename= "UserList".($urlkeys+1).".txt";
$fp = fopen($filename, "w");
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);
}

$p=0;
for($i=0;$i<3;$i++)
  {
    $filename="UserList".($i+1).".txt";    
    $contacts = fopen($filename, "r");
    

while(($line=fgets($contacts))!==false){   
  // echo $line;
  $line = trim($line);
  $line = str_replace("<!DOCTYPE html>","",$line);
  $line = str_replace("<html>","",$line);
  $line = str_replace("<head>","",$line);
  $line = str_replace("</head>","",$line);
  $line = str_replace("</html>","",$line);
  $line = str_replace("<body>","",$line);
  $line = str_replace("</body>","",$line);
  $line = trim($line); 
  $user = explode("<br>", $line);  
  $user = array_filter($user);   
  foreach ($user as $k => $v) 
  {
    echo "<tr>";    
    $cols = explode(",",$v);      
    $cols = array_filter($cols);     
    foreach($cols as $colskeys=>$colvals)
    { 
      if($i==2 && $colskeys==4)
      {

      }
      else{             
      echo "<td>".$colvals."</td>";
      
      }    
    }
    
      echo "<td>".$usrArrNames[$i]."</td>";  
    
    echo "</tr>";
  }
}
fclose($contacts);
  }

?>
  </table>
</div>
        
<?php require "footer.php" ?>
