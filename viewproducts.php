<?php require "assets/services/dbconnect.php"?>
<?php
    $id = $_REQUEST['id'];     
    $page= $_SERVER['HTTP_REFERER']; 
    
    $result = $conn->query("SELECT * FROM sys.products where id = ".$id.";");
    $prod = $result -> fetch_assoc();
    $hits = $prod["hits"] + 1;
    $mhits=1;
    echo "base";
    echo basename($page);
    $page = dirname($page).'/'."assets/products/".$prod['name'].'.php' ;
    echo $page;
    $conn->query("UPDATE products SET hits = ".$hits." WHERE id = ".$id.";");      
     $res=$conn->query("SELECT * from marketplace.producthits where prodid=$id and type='soulfulart';");
    if($res->num_rows >0)
    {
        $mprod = $res -> fetch_assoc();    
        $mhits = $mprod["hits"] + 1;  
        $conn->query("UPDATE marketplace.producthits SET hits = ".$mhits." WHERE prodid = ".$id." and type='soulfulart';");    
    }
    else{
        $name=$prod['name'];
        $conn->query("INSERT INTO marketplace.producthits VALUES($id,'soulfulart',$mhits,1,'$name','$page');");  
    }
   // $conn->close();
?>
<?php
    if(isset($_COOKIE["lastids"])){
        if(explode(",",$_COOKIE["lastids"])[0]!=$prod["id"]){
            setcookie("lastids",$prod["id"].",".$_COOKIE["lastids"],time() + (86400 * 30));    
        }        
    }
    else{
        setcookie("lastids", $prod["id"], time() + (86400 * 30));
    }
?>

<?php
    $userid=$_COOKIE["userid"];
    if($id && isset($id))
    { 
      $sql="SELECT * from marketplace.userstatus where userid=$userid;";
      $res=$conn->query($sql);     
      if($res->num_rows > 0)
      {
        $user=$res->fetch_assoc();
        $status=$user["status"];
        if($status=="inactive")
        {
          setcookie("userid","", time() - 3600);
          header("location: error.php");
          exit();
        }
      }
      $conn->close();
     
    }
    header("location: assets/products/".$prod['name'].".php");
?>




