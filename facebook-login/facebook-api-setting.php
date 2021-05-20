<?php
// Database Connection
class FB_API{
public $hostname=       'database-1.ckswgwtyfetx.us-west-2.rds.amazonaws.com'; // Enter Your Hostname
public $DBusername=     'root';    // Enter your database username
public $DBpassword=     'chitty1411';        // Enter your database password
public $DBname=         'facebooklogin'; // Enter your database name
public $usersTableName= 'fblogin'; // Enter your users table name
// Facebook API Key
//public $FB_APP_ID= '2845509079031928'; // Enter your fb App ID
public $FB_APP_ID= '3131210310431337';
public $FB_APP_SECRET='ab330fa9be7483e7d3de48d4065a1e7f'; 
//public $FB_APP_SECRET='c53d99755dd65f5cd76488c93701a61f'; // Enter your fb Secret key
public $FB_REDIRECT_URL= 'http://localhost/soulfulart/products.php'; // Enter page address where it will redirect after login
// Facebook API Path
public $FB_API_path='/src/Facebook/autoload.php'; /* keep as it is your api folder same
like this*/
}
?>