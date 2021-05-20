Thanks for downloading this template!

Template Name: Soulful Art

DB creds are in marketdbconnector.php file

our market url would be like this: http://localhost/soulfulart/marketlogin.php

or http://www.soulfulart.ml/marketlogin/php(once deployed)
for now its deployed here temporarily:
http://myphpworld-env.eba-v47gj2kf.us-west-2.elasticbeanstalk.com/markethomepage.php
existing user :
username:admin
password:admin

fblogin creds:
1. phonenumber:9398086316
2. password:fblogin@272

it works only with http:localhost for now as ssl bindings arent available for us so you can check it in your local

Market code is updated here

Once a user logs-in and selects the individual website a user id is passed to individual websites as query string.
Please read and save it for further usage

1. add your product image and link in markethomepage.php file

Make 2 DB calls

1. One for products table ratign ,review insertion
2. One for producthits insertion

1. One for products table ratign ,review insertion-insert it this way
INSERT INTO marketplace.products(prodid,type,rating,review,userid,productname,hits) VALUES($prodid,'soulfulart',$rating,'$review',$userid,'$productname',$hits)";

prodid - your product id
soulfulart can be replaced by your own website name
rating - of your product
review - of your product
userid - which is passed from market to your website
hits - is dummy in this tab;e you can send any data here -  i read the hits count from table and then added 1 to it and sent

2. One for producthits insertion-insert it this way

INSERT INTO marketplace.producthits VALUES($id,'soulfulart',$mhits,1,'$name','$page')

id - your product id
soulfulart can be replaced by your own website name
mhits - first read hits using this query then increment it by 1 and send it
SELECT * from marketplace.producthits where prodid=$id and type='soulfulart';
name - your product name as in we have 10 products so yu can chose your product names for your identification 
page - the navigation link to your product ( suppose your product1 is reviewed/rated send that product1 page link so that we can show the link to navigate to that product again in top ratings page








