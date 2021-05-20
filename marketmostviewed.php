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
    <h5 style="text-align:center;">The Top 5 viewed products of the market</h5>
        <div class="col-md-10">
<?php
//print_r($sqlproductsres);

 if($sqlprodhitsres->num_rows>0)
 {
    $rows=$sqlprodhitsres->num_rows;  
     for($i=0; $i<$rows; $i++){
     {
        //echo "yes";
     $data=$sqlprodhitsres->fetch_assoc();     
     $company=$data["type"];
     $productname=$data["productname"];
     $hits =  $data["hits"];
     $productlink=$data["prodlink"];
        echo '
        <div class="row p-2 bg-white border rounded mt-2">
        
        <div class="col-md-6 mt-1">
            <h5>'.$productname.'</h5>
            <div class="d-flex flex-row">
                <div class="ratings mr-2">';
                echo 'Number of hits: ';
                echo '</div>
                
                <span>'.$hits.'</span>
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
 else{
     echo 'Sorry No products found!';
 }
?>


            
           
           
        </div>
    </div>
</div>

</body>
</html>