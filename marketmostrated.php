<?php ob_start(); ?>
<?php require "marketheader.php"?>
<?php require "fetchmarketdetails.php"?>
<?php
if(!session_id()){
    session_start();
}

if(empty($_SESSION["uname"]))
{
    header("location: ./marketlogin.php");
    exit();
}
?>
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
    <h5 style="text-align:center;">The Top 5 rated products of the market</h5>
        <div class="col-md-10">
<?php
 if($sqlproductsres->num_rows>0)
 {
    $rows=$sqlproductsres->num_rows;  
     for($i=0; $i<$rows; $i++){
     {

     $data=$sqlproductsres->fetch_assoc();     
     $company=$data["type"];
     $productname=$data["productname"];
     $rating =  $data["rating"];
     $sqlplink= "select * from marketplace.producthits where productname = '$productname' and type='$company'";
     $res = $conn->query($sqlplink);
    if($res->num_rows>0)
     {
      
        $datares=$res->fetch_assoc(); 
        $productlink=$datares["prodlink"];
              
        echo '
        <div class="row p-2 bg-white border rounded mt-2">
        
        <div class="col-md-6 mt-1">
            <h5>'.$productname.'</h5>
            <div class="d-flex flex-row">
                <div class="ratings mr-2">';
                for($j=0;$j<$rating;$j++)
                {
                    echo '<i class="fa fa-star"></i>';
                }
                echo '
                </div><span>'.$rating.'</span>
            </div>
          
        </div>
        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
          
            <h6 class="text-success">'.$company.'</h6>
            <div class="d-flex flex-column mt-4"><a class="btn btn-primary btn-sm" target="_blank" href="'.$productlink.'">view product</a></div>
        </div>
    </div>
        ';

     }
    }
 }
}
 else{
     echo 'Sorry No products found!';
 }
?>       
        </div>
    </div>
</div>

</body>
</html>