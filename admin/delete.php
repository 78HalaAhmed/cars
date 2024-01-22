<?php

include_once("includes/logged.php");
if(isset( $_GET["id"])){
 try{
    include_once("includes/conn.php");
     $id=$_GET["id"];
     $sql="DELETE FROM `testimonials` WHERE id = ?";
     $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
      echo "delete successfully";
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();}
}else{
       echo "ivalid request";
}



?>