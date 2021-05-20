<?php 
    require "assets/services/marketdbconnector.php";
    $sqlprodhits = "SELECT * FROM marketplace.producthits ORDER BY hits DESC limit 5";    
    $sqlprodhitsres = $conn->query($sqlprodhits);  
    //$sqlproducts = "SELECT * FROM marketplace.products ORDER BY rating DESC";
    $sqlproducts = "SELECT max(rating) as rating,type,productname FROM marketplace.products group by productname ORDER BY rating DESC limit 5";
    $sqlproductsres = $conn->query($sqlproducts);  
    $sqlureviews="select *,count(review) as reviewcount from products group by productname order by count(review) desc limit 10";
    $sqlureviewsres = $conn->query($sqlureviews);   
?>
    <!-- // for($i=0; $i<5; $i++){
    //     $row = $results->fetch_assoc();
    //     echo "<tr>";
    //     echo "<td><a target='_blank' href='../../viewproducts.php?id=".$row["id"]."'>".$row["name"]."</a></td>";
    //     echo "<td>".$row["hits"]."</td>";
    //     echo "</tr>";
    // }
?> -->
