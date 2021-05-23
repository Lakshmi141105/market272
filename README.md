# market272

This is the working url :http://myphpworld-env.eba-v47gj2kf.us-west-2.elasticbeanstalk.com/marketlogin.php
username:market
Pswd:Market123

Changes required at individual site:
1. user session id is sent encrypted in query string
  a. get the cipher text related tag and iv from marketplace.encryptiondata table using
    $sql="SELECT * from marketplace.encryptiondata where ciphertext='$id';";
  b. perform decryption this way
        $tag =hex2bin($sres['tag']); 
        $iv = hex2bin($sres['iv']);   
        $key="market";
        $cipher = "aes-128-gcm";
        $ciphertext = $id;          
        $original_plaintext = openssl_decrypt($id, $cipher, $key, $options=0, $iv,$tag); //now yu have the session id fetch the session details from userstatus table 
  c. $sqlu="SELECT * from marketplace.userstatus where sessionid='$sessionid' and status='active';";
  //now you have the user id for further processing
  
2. Use the user id and save it in whatever way for further usage(i saved in cookie)

3. Insrt to marketplace.products table like this
$sql = "INSERT INTO marketplace.products(prodid,type,rating,review,userid,productname,hits) VALUES($prodid,'soulfulart',$rating,'$review',$userid,'$productname',$hits)";
$prodid - your selected product id
soulfulart - replace with your site name
$rating - rating given to this product by user
$review - review given to this product by user
$productname - your selected product name
$hits - dummy here used in other table so send any random value

4. Insrt to marketplace.producthits table like this
first fetch the details and then update hits if already exists
  $res=$conn->query("SELECT * from marketplace.producthits where prodid=$id and type='soulfulart';");
  $conn->query("UPDATE marketplace.producthits SET hits = ".$mhits." WHERE prodid = ".$id." and type='soulfulart';");  
else
   $conn->query("INSERT INTO marketplace.producthits VALUES($id,'soulfulart',$mhits,$userid,'$name','$page');");    
$id - product id
soulfulart - your website name
$mhits - hits fetched from DB ( set as 1 if none exists)
$userid - user id sent from market place
$name - product name selected
$page - link to your selected product so that it can later be used in Most reviewed/rated pages








