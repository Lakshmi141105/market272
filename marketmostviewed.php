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
     $hits =  $data["thits"];
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

<?php
//print_r($sqltypesres);
$sqlprodhitsindividual="";
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
            $sqlphitsindi="SELECT productname,prodlink,sum(hits) as tcount FROM marketplace.producthits WHERE type='$typename' Group by productname ORDER BY tcount DESC limit 5";
            $sqlprodhres=  $conn->query($sqlphitsindi);
             if( $sqlprodhres->num_rows>0)
             {
                $rcnt=$sqlprodhres->num_rows;
                for($is=0;$is<$rcnt;$is++)
                {                
                $phitsres= $sqlprodhres->fetch_assoc();
                $phits=$phitsres["tcount"];
                $pname=$phitsres["productname"];               
                $plink= $phitsres["prodlink"];          
                echo '
                <div class="row p-2 bg-white border rounded mt-2">
                
                <div class="col-md-6 mt-1">
                    <h5>'.$pname.'</h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2">';
                        echo 'Number of hits: ';
                        echo '</div>
                        
                        <span>'.$phits.'</span>
                    </div>
                  
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                  
                    <h6 class="text-success">'.$typename.'</h6>
                    <div class="d-flex flex-column mt-4"><a class="btn btn-primary btn-sm" target="_blank" href="'.$plink.'">view product</a></div>
                </div>
            </div>
                
                
                ';   
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