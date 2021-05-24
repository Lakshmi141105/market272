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
    <h5 style="text-align:center;">The Most reviewed products of the market</h5>
        <div class="col-md-10">
<?php
 if($sqlureviewsres->num_rows>0)
 {
    $rows=$sqlureviewsres->num_rows;  
     for($i=0; $i<$rows; $i++){
     {

     $data=$sqlureviewsres->fetch_assoc();     
     $company=$data["type"];
     $productname=$data["productname"];
     $review =  $data["review"];
     $reviewcounts=$data["reviewcount"];
     $sqlplink= "select * from marketplace.producthits where productname = '$productname' and type='$company'";
     $res = $conn->query($sqlplink);
     $reviews="select review from products where productname='$productname' and type='$company'";
     $rvres=$conn->query($reviews);
    if($res->num_rows>0)
     {
      
        $datares=$res->fetch_assoc(); 
        $productlink=$datares["prodlink"];
              
        echo '
        <div class="row p-2 bg-white border rounded mt-2">
        
        <div class="col-md-6 mt-1">
            <h5>'.$productname.'</h5><span>Total Reviews : </span><span>'.$reviewcounts.'</span>
            <div class="d-flex flex-row">
                <div class="mt-1 mb-1 spec-1">';
                if($rvres->num_rows>0)
                {
                    for($j=$reviewcounts;$j>0;$j--)
                    {          
                        $rvw=$rvres->fetch_assoc();
                        $rv=$rvw["review"];          
                        echo '<span class="dot"></span><span>'.$rv.'</span>';
                    }
                }
                echo '
                </div>
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
            $sqlprvwindi="select *,count(review) as reviewcount from products where type='$typename' group by productname,type order by count(review) desc limit 5";
            $sqlprodrvwres=  $conn->query($sqlprvwindi);
             if( $sqlprodrvwres->num_rows>0)
             {
                $rcnt=$sqlprodrvwres->num_rows;
                for($is=0;$is<$rcnt;$is++)
                {                
                $prvwsres= $sqlprodrvwres->fetch_assoc();

                $ptype=$prvwsres["type"];
                $pname=$prvwsres["productname"];
                $prvw =  $prvwsres["review"];
                $prvwcnt=$prvwsres["reviewcount"];
                $sqlprvwlink= "select * from marketplace.producthits where productname = '$pname' and type='$typename' LIMIT 1";
                $ppres = $conn->query($sqlprvwlink);
                $previews="select review from products where productname='$pname' and type='$typename'";
                $prvres=$conn->query($previews);
                if($ppres->num_rows>0)
                {
                $pdatares=$ppres->fetch_assoc(); 
                $prvwroductlink=$pdatares["prodlink"];
                      
                // $phits=$phitsres["tcount"];
                // $pname=$phitsres["productname"];               
                // $plink= $phitsres["prodlink"];          
                echo '
                <div class="row p-2 bg-white border rounded mt-2">
                
                <div class="col-md-6 mt-1">
                <h5>'.$pname.'</h5><span>Total Reviews : </span><span>'.$prvwcnt.'</span>
                    <div class="d-flex flex-row">
                    <div class="mt-1 mb-1 spec-1">';
                    if($prvres->num_rows>0)
                    {
                        for($j=$prvwcnt;$j>0;$j--)
                        {          
                            $prvw=$prvres->fetch_assoc();
                            $prv=$prvw["review"];          
                            echo '<span class="dot"></span><span>'.$prv.'</span>';
                        }
                    }
                    echo '
                    </div>
                  </div>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                  
                    <h6 class="text-success">'.$typename.'</h6>
                    <div class="d-flex flex-column mt-4"><a class="btn btn-primary btn-sm" target="_blank" href="'.$prvwroductlink.'">view product</a></div>
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

}
?>









</body>
</html>