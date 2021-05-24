<?php 
    require "assets/services/marketdbconnector.php";
    $sqlprodhits = "SELECT productname,prodlink,type,sum(hits) as thits FROM marketplace.producthits GROUP BY productname ORDER BY thits DESC limit 5";    
    $sqlprodhitsres = $conn->query($sqlprodhits);  
    //$sqlproducts = "SELECT * FROM marketplace.products ORDER BY rating DESC";
    $sqlproducts = "SELECT max(rating) as rating,type,productname FROM marketplace.products group by productname ORDER BY rating DESC limit 5";
    $sqlproductsres = $conn->query($sqlproducts);  
    $sqlureviews="select *,count(review) as reviewcount from products group by productname order by count(review) desc limit 10";
    $sqlureviewsres = $conn->query($sqlureviews);   
    $sqltotaltypes = "SELECT DISTINCT type FROM marketplace.products";
    $sqltypesres = $conn->query($sqltotaltypes);   
    //$sqltotaltypes = "SELECT DISTINCT type FROM marketplace.products";
    //SELECT rating AS rating,productname FROM marketplace.products WHERE type='soulfulart' ORDER BY rating DESC limit 5
   // $sqlprodhitsindividual = "SELECT * FROM marketplace.producthits WHERE type='soulfulart'  ORDER BY hits DESC limit 5";    
    //$sqlprodhitsres = $conn->query($sqlprodhitsindividual);  

?>
   
