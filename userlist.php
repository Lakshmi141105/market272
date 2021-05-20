<?php require "assets/services/dbconnect.php"?>
<?php   
    $result = $conn->query("SELECT * FROM sys.user;");   
    while($row = $result->fetch_assoc()) {    
      
        echo "<br>";
        echo $row["firstname"].',';
        echo $row["lastname"].',';
        echo $row["email"].',';
        echo $row["homeaddress"].',';
        echo $row["homephone"].',';
        echo $row["cellphone"];       
    }
    $conn->close();
?>