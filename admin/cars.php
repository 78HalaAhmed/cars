<?php
include_once("includes/logged.php");
try{
include_once("includes/conn.php");


$sql = "select * from `car`";
$stmt = $conn->prepare($sql);
 $stmt->execute();
}catch(PDOException $e){
  echo "Connection failed: " . $e->getMessage();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table V01</title>
    <link rel="stylesheet" href="cars.css">
</head>
<body>

    <body>
        <div id="wrapper">
         <h1>Cars List</h1>
         
         <table id="keywords" cellspacing="0" cellpadding="0">
           <thead>
             <tr>
               <th><span>Car Title</span></th>
               <th><span>Model</span></th>
               <th><span>Price</span></th>
               <th><span>delet</span></th>
               <th><span>update</span></th>

              
               
             </tr>
           </thead>
           <tbody>
            <?php
            foreach ($stmt->fetchAll() as $row) { 
              $titel=$row["titel"];
              $model=$row["model"];
              $price=$row["price"];
              $id=$row["id"];

              
            
            ?>
            <tr>
               <td class="lalign"> <?php  echo  $titel ?></td>
               <td><?php  echo  $model ?></td>
               <td><?php  echo  $price ?></td>
               <td><a href="delete.php?id=<?php echo $id ?>" onclick="return confirm('Are you sure you want to delete?')"><img src="../img/delete.jpg" alt=""></a></td>
               <td><a href="UpdateCar.php?id=<?php echo $id ?>"><img src="../img/update.jpg" alt=""></a></td>
             </tr>
             <?php
            }
             ?>
        
           </tbody>
         </table>
        </div> 
       </body>
</body>
</html>
