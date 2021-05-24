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
<!-- show by products group by count -->
<?php 

//print_r($sqltypesres);
if($sqltypesres->num_rows>0)
{
    $rowcount=$sqltypesres->num_rows;
    for($ix=0;$ix<$rowcount;$ix++)
    {
        $typeres= $sqltypesres->fetch_assoc();
        $typename= $typeres["type"];
        echo '
        <div class="row">
    <div class="col-lg-8 mx-auto">
      <!-- Accordion -->
      <div id="accordionExample" class="accordion shadow">

        <!-- Accordion item 1 -->
        <div class="card">
          <div id="heading'.$ix.'" class="card-header bg-white shadow-sm border-0">
            <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapse'.$ix.'" aria-expanded="true" aria-controls="collapseOne" class="d-block position-relative text-dark text-uppercase collapsible-link py-2">Top rated products of '.$typename.'</a></h6>
          </div>
          <div id="collapse'.$ix.'" aria-labelledby="heading'.$ix.'" data-parent="#accordionExample" class="collapse show">
            <div class="card-body p-5">';
            $sqlcompratings="SELECT max(rating) AS rating,productname FROM marketplace.products WHERE type='$typename' group by productname ORDER BY rating DESC limit 5";
            $sqlprodres=  $conn->query($sqlcompratings);
             if( $sqlprodres->num_rows>0)
             {
                $rcnt=$sqlprodres->num_rows;
                for($is=0;$is<$rcnt;$is++)
                {                
                $compres= $sqlprodres->fetch_assoc();
                $rate=$compres["rating"];
                $pname=$compres["productname"];               
                $sqlprodlink= "select * from marketplace.producthits where productname = '$pname' and type='$typename'";
                $resprodlink = $conn->query($sqlprodlink);
                $plink="";
                if($resprodlink->num_rows>0)
                {
                    $plinkr=$resprodlink->fetch_assoc();
                    $plink=$plinkr["prodlink"];
                   // echo $plink;
                }               
                echo '
            <div class="row p-2 bg-white border rounded mt-2">
            
            <div class="col-md-6 mt-1">
                <h5>'.$pname.'</h5>
                <div class="d-flex flex-row">
                    <div class="ratings mr-2">';
                    for($j=0;$j<$rating;$j++)
                    {
                        echo '<i class="fa fa-star"></i>';
                    }
                    echo '
                    </div><span>'.$rate.'</span>
                </div>
              
            </div>
            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
              
                <h6 class="text-success">'.$typename.'</h6>
                <div class="d-flex flex-column mt-4"><a class="btn btn-primary btn-sm" target="_blank" href="'.$plink.'">view product</a></div>
            </div>
            </div> ';    
                }    
            } 
                echo '
            </div>
          </div>
        </div>
        </div>
    </div>
  </div>      
        
        ';

    }

}
?>

</body>
</html>